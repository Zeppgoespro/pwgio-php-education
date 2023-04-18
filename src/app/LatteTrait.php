<?php

namespace App;

trait LatteTrait
{

  private string $milkType = 'whole-milk';

  #public static int $x = 1;

  public static string $foo;

  final public function makeLatte()
  {
    echo __CLASS__ . ' is making latte with ' . $this->milkType . PHP_EOL;
  }

  #abstract public function getMilkType(): string;
  // {
  //   if (property_exists($this, 'milkType')):
  //     return $this->milkType;
  //   endif;

  //   return '';
  // }

  // public static function foo()
  // {
  //   echo 'Foo Bar' . PHP_EOL;
  // }

  public function setMilkType(string $milkType): static
  {
    $this->milkType = $milkType;

    return $this;
  }

}