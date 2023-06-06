<?php

declare(strict_types=1);

namespace App\Temp\VarianceExample;

abstract class Animal
{

  public function __construct(protected string $name)
  {
  }

  abstract public function speak();

  public function eat(AnimalFood $food)
  {
    echo $this->name . ' eats ' . get_class($food);
  }

}