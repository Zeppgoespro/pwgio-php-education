<?php

require_once __DIR__ . '/../vendor/autoload.php';

// $coffeeMaker = new \App\CoffeeMaker();
// $coffeeMaker->makeCoffee();

// $latteMaker = new \App\LatteMaker();
// $latteMaker->makeCoffee();
// $latteMaker->makeLatte();

// $cappuccinoMaker = new \App\CappuccinoMaker();
// $cappuccinoMaker->makeCoffee();
// $cappuccinoMaker->makeCappuccino();

// $allInOneCoffeeMaker = new \App\AllInOneCoffeeMaker();
// $allInOneCoffeeMaker->makeCoffee();
// $allInOneCoffeeMaker->makeLatte();
// #$allInOneCoffeeMaker->makeOriginalLatte();
// $allInOneCoffeeMaker->makeCappuccino();

#echo App\LatteMaker::$x;

App\LatteMaker::$foo = 'foo';
App\AllInOneCoffeeMaker::$foo = 'bar';

echo App\LatteMaker::$foo . ' ' . App\AllInOneCoffeeMaker::$foo . PHP_EOL;