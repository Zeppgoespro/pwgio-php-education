<?php

namespace App;

trait CappuccinoTrait
{

  private function makeCappuccino()
  {
    echo static::class . ' is making cappuccino' . PHP_EOL;
  }

  // public function makeLatte()
  // {
  //   echo static::class . ' is making latte (CAPPUCCINO)' . PHP_EOL;
  // }

}