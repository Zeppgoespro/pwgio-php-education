<?php

declare(strict_types=1);

namespace App\Temp\VarianceExample;

class Cat extends Animal
{

  public function speak()
  {
    echo $this->name . ' meows';
  }

}