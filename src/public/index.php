<?php

declare(strict_types=1);

use App\App;
use App\Router;
use App\Config;
use App\Container;
use App\Controllers\HomeController;
use App\Controllers\GeneratorExampleController;
use App\Controllers\InvoiceController;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');

$container = new Container;
$router = new Router($container);

$router->registerRoutesFromControllerAttribute(
  [
    HomeController::class,
    GeneratorExampleController::class,
    InvoiceController::class
  ]
);

// echo '<pre>';
// print_r($router->routes());
// echo '</pre>';

// $router->get('/', [HomeController::class, 'index']);
// $router->get('/examples/generator', [GeneratorExampleController::class, 'index']);

(new App(
  $container,
  $router,
  ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
  new Config($_ENV)
))->run();