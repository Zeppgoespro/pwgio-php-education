<?php

declare(strict_types=1);

namespace App\Classes;

use App\View;

class Home
{

  public function index(): string
  {

    # $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;

    setcookie(
      'userName',
      'Zepp',
      time() + 20,
      '/',
      '',
      false,
      false
    );

    return View::make('index', $_GET)->render();

  }

}