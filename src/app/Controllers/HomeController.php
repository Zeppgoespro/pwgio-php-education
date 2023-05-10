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

      $db = new PDO('mysql:host=database;dbname=my_db', 'root', 'yesenin', [
        # PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        # PDO::ATTR_EMULATE_PREPARES => false
      ]);

      # $email = $_GET['email'];
      $email = 'jungo@bookex.com';
      $name = 'Bob Jungo';
      $isActive = 0;
      $createdAt = date('Y-m-d H:m:i', strtotime('05/10/2023 10:00PM'));
      # $query = 'SELECT * FROM `users` WHERE `email` = "' . $email . '"';
      # $query = 'SELECT * FROM `users` WHERE `email` = ?';
      # $query = 'INSERT INTO users (email, full_name, is_active, created_at) VALUES (?,?,?,?)';

      $query = 'INSERT INTO `users` (email, full_name, is_active, created_at) VALUES (:email, :name, :active, :date)';

      # echo $query . '<br />';

      /*
      $stmt = $db->query($query);

      echo '<pre>';
      var_dump($stmt->fetchAll());
      echo '</pre>';
      */

      // foreach ($db->query($query)/*->fetchAll(PDO::FETCH_OBJ)*/ as $user):

      //   echo '<pre>';
      //   var_dump($user);
      //   echo '</pre>';

      // endforeach;

      $stmt = $db->prepare($query);
      # $stmt->execute();
      # $stmt->execute([$email]);
      # $stmt->execute([$email, $name, $isActive, $createdAt]);

      // $stmt->bindValue('name', $name);
      // $stmt->bindValue('email', $email);
      // $stmt->bindValue('active', $isActive, PDO::PARAM_BOOL);
      // $stmt->bindValue('date', $createdAt);

      // $stmt->bindParam('name', $name); # by reference
      // $stmt->bindParam('email', $email);
      // $stmt->bindParam('active', $isActive, PDO::PARAM_BOOL);
      // $stmt->bindParam('date', $createdAt);

      $stmt->execute([
        ':email'  => $email,
        ':name'   => $name,
        ':active' => $isActive,
        ':date'   => $createdAt
      ]);

      $id = (int) $db->lastInsertId();

      $user = $db->query('SELECT * FROM `users` WHERE id = ' . $id)->fetch();

      echo '<pre>';
      var_dump($user);
      echo '</pre>';

      // foreach ($stmt->fetchAll() as $user):
      //   echo '<pre>';
      //   var_dump($user);
      //   echo '</pre>';
      // endforeach;

    } catch (\PDOException $e) {
      throw new \PDOException($e->getMessage(), (int) $e->getCode());
    }

    # var_dump($db);

    return View::make('index');
  }

}