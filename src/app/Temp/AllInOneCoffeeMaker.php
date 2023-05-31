<?php

namespace App\Temp;

class AllInOneCoffeeMaker extends CoffeeMaker # implements MakesLatte, MakesCappuccino
{
  // use LatteTrait {
  //   LatteTrait::makeLatte as makeOriginalLatte;
  // }
  // use CappuccinoTrait{
  //   CappuccinoTrait::makeLatte insteadof LatteTrait;
  // }

  use CappuccinoTrait {
    CappuccinoTrait::makeCappuccino as public;
  }

  use LatteTrait;

  // private string $milkType = 'whole-milk';

  // public function getMilkType():string
  // {
  //   return $this->milkType;
  // }

}