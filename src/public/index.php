<?php

declare(strict_types=1);

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

$router = new App\Router();

$router
  // ->register('/', [App\Classes\Home::class, 'index'])
  // ->register('/invoices', [App\Classes\Invoice::class, 'index'])
  // ->register('/invoices/create', [App\Classes\Invoice::class, 'create']);
  ->get('/', [App\Classes\Home::class, 'index'])
  ->get('/invoices', [App\Classes\Invoice::class, 'index'])
  ->get('/invoices/create', [App\Classes\Invoice::class, 'create'])
  ->post('/invoices/create', [App\Classes\Invoice::class, 'store']);
#

# # # # # # # # # #

echo $router->resolve(
  $_SERVER['REQUEST_URI'],
  strtolower($_SERVER['REQUEST_METHOD'])
);

# var_dump($_SESSION);

var_dump($_COOKIE);