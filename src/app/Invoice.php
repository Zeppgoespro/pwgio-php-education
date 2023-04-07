<?php

namespace App;

class Invoice
{
  /*
  # First verion - magic get & magic set

  protected float $amount;

  public function __construct(float $amount)
  {
    $this->amount = $amount;
  }

  public function __get(string $name)
  {
    if (property_exists($this, $name)):
      return $this->$name;
    endif;

    return null;
  }

  public function __set(string $name, $value): void
  {
    if (property_exists($this, $name)):
      return $this->$name = $value;
    endif;

    return null;
  }
  */

  protected array $data;

  public function __get(string $name)
  {
    if (array_key_exists($name, $this->data)):
      return $this->data[$name];
    endif;

    return null;
  }

  public function __set(string $name, $value): void
  {
    $this->data[$name] = $value;
  }
}