<?php

declare(strict_types=1);

namespace App\Temp\VarianceExample;

interface AnimalShelter
{

  public function adopt(string $name): Animal;

}