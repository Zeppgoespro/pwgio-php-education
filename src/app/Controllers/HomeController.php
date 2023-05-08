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

      ]);

      $query = 'SELECT * FROM `users`';

      /*
      $stmt = $db->query($query);

      echo '<pre>';
      var_dump($stmt->fetchAll());
      echo '</pre>';
      */

      foreach ($db->query($query) as $user):

        echo '<pre>';
        var_dump($user);
        echo '</pre>';

      endforeach;

    } catch (\PDOException $e) {
      throw new \PDOException($e->getMessage(), $e->getCode());
    }

    # var_dump($db);

    return View::make('index');
  }

}