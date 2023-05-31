<?php

namespace App\Temp;

abstract class Field implements Renderable
{
  public function __construct(protected string $name)
  {
  }
}