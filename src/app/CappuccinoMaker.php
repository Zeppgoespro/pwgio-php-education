<?php

namespace App;

class CappuccinoMaker extends CoffeeMaker #implements MakesCappuccino
{

  use CappuccinoTrait {
    CappuccinoTrait::makeCappuccino as public;
  }

}