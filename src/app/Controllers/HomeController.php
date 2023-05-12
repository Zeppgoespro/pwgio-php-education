<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;
use PDO;

class HomeController
{

  public function index(): View
  {
    try {

      $db = new PDO('mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_DATABASE'],
        $_ENV['DB_USER'],
        $_ENV['DB_PASS']
      );

    } catch (\PDOException $e) {
      throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    $email = 'frodo@bkex.com';
    $name = 'Frodo Baggins';
    $amount = 33;

    try {

      $db->beginTransaction(); # TRANSACTION

      $new_user_stmt = $db->prepare("INSERT INTO users (email, full_name, is_active, created_at) VALUES (?,?,1,NOW())");

      $new_invoice_stmt = $db->prepare("INSERT INTO invoices (amount, user_id) VALUES (?,?)");

      $new_user_stmt->execute([$email,$name]);

      $user_id = (int) $db->lastInsertId();

      # throw new \Exception('Test');

      $new_invoice_stmt->execute([$amount, $user_id]);

      $db->commit();

    } catch (\Throwable $e) {
      if ($db->inTransaction()):
        $db->rollBack();
      endif;
    }

    $fetch_stmt = $db->prepare("SELECT invoices.id AS invoice_id, amount, user_id, full_name FROM invoices INNER JOIN users on user_id = users.id WHERE email = ?");

    $fetch_stmt->execute([$email]);

    // echo '<pre>';
    // var_dump($fetch_stmt->fetch(PDO::FETCH_ASSOC));
    // echo '</pre>';

    return View::make('index');
  }

}