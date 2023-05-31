<?php

namespace App\Temp;

class CoffeeMaker
{
  # public static string $foo;

  public function makeCoffee()
  {
    echo static::class . ' is making coffee' . PHP_EOL;
  }
}