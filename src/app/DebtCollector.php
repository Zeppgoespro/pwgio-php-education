<?php

namespace App;

interface DebtCollector extends AnotherInterface, SomeOtherInterface
{
  public function collect(float $owedAmount): float;
}