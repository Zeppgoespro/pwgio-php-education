<?php

namespace App\Temp;

class LatteMaker extends CoffeeMaker # implements MakesLatte
{
  use LatteTrait;

  // private string $milkType = 'whole-milk';

  // public function getMilkType():string
  // {
  //   return $this->milkType;
  // }
}