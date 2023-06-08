<?php

declare(strict_types=1);

namespace App\Temp\CompositionVsInheritance;

class SalesTaxCalculator
{

  public function calculate(float|int $total): float
  {
    return round($total * 7 / 100, 2);
  }

}