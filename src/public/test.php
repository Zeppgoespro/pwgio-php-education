<?php

# Warning! This is not the main index, but test, which created for use in another lesson with dependent files in Temp (app/Temp) directory.

declare(strict_types=1);

use App\Temp\App\Invoice;
use App\Temp\VarianceExample\AnimalFood;
use App\Temp\VarianceExample\DogShelter;
use App\Temp\VarianceExample\CatShelter;
use App\Temp\VarianceExample\Food;

require_once __DIR__ . '/../vendor/autoload.php';

/* WeakMap Explained */

# $invoice1 = new Invoice();

# $invoice2 = $invoice1;

# echo 'Unsetting Invoice 1' . PHP_EOL;
# unset($invoice1);
# echo 'Unset Invoice 1' . PHP_EOL;
# var_dump($invoice2);

// $ref = WeakReference::create($invoice1);

// var_dump($ref->get());
// unset($invoice1);
// var_dump($ref->get());

// $map = new WeakMap();
// $map[$invoice1] = ['a' => 1, 'b' => 2];

// var_dump(count($map));

// unset($invoice1);

// var_dump(count($map));

// var_dump($map);

/* Covariance & Contravariance in PHP */

$kitty = (new CatShelter)->adopt('Coco');
$catFood = new AnimalFood;
$kitty->speak();
echo PHP_EOL;
$kitty->eat($catFood);
echo PHP_EOL;

$doggy = (new DogShelter)->adopt('Mavrick');
$banana = new Food;
$doggy->speak();
echo PHP_EOL;
$doggy->eat($banana);
echo PHP_EOL;