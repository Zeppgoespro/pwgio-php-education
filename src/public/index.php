<?php

declare(strict_types=1);

use App\App;
use App\Router;
use App\Config;
use App\Controllers\HomeController;
use App\Controllers\InvoiceController;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');

$router = new Router();

$router->get('/', [HomeController::class, 'index']);
$router->get('/download', [HomeController::class, 'download']);
$router->post('/upload', [HomeController::class, 'upload']);
$router->get('/invoices', [InvoiceController::class, 'index']);
$router->get('/invoices/create', [InvoiceController::class, 'create']);
$router->post('/invoices/create', [InvoiceController::class, 'store']);

(new App(
  $router,
  ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
  new Config($_ENV)
))->run();