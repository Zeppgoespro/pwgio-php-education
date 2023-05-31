<?php

namespace App\Temp;

interface DebtCollector extends AnotherInterface, SomeOtherInterface
{
  public function collect(float $owedAmount): float;
}