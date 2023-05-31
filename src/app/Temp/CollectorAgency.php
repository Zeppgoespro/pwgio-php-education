<?php

namespace App\Temp;

class CollectorAgency implements DebtCollector, AnotherInterface
{
  public function collect(float $owedAmount): float
  {
    $guaranteed = $owedAmount * 0.5;

    return mt_rand($guaranteed, $owedAmount);
  }
}