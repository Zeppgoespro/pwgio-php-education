<?php

# Warning! This is not the main index, but index, which created for use in another lesson with dependent files in Temp (app/Temp) directory.

declare(strict_types=1);

use App\Temp\App\Invoice;

require_once __DIR__ . '/../vendor/autoload.php';

$invoice1 = new Invoice();

# $invoice2 = $invoice1;

# echo 'Unsetting Invoice 1' . PHP_EOL;
# unset($invoice1);
# echo 'Unset Invoice 1' . PHP_EOL;
# var_dump($invoice2);

// $ref = WeakReference::create($invoice1);

// var_dump($ref->get());
// unset($invoice1);
// var_dump($ref->get());

$map = new WeakMap();
$map[$invoice1] = ['a' => 1, 'b' => 2];

var_dump(count($map));

unset($invoice1);

var_dump(count($map));

var_dump($map);