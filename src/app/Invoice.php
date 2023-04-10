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

  /*
  # Second verion - magic isset & magic unset

  protected array $data = [];

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

  public function __isset($name): bool
  {
    var_dump('isset');

    return array_key_exists($name, $this->data);
  }

  public function __unset($name): void
  {
    var_dump('unset');

    unset($this->data[$name]);
  }
  */

  /*
  # Third version - magic call & magic callStatic

  protected function process(float $amount, $description)
  {
    var_dump($amount, $description);
  }

  public function __call(string $name, array $arguments)
  {
    if (method_exists($this, $name)):
      call_user_func_array([$this, $name], $arguments);
    endif;
  }

  public static function __callStatic($name, $arguments)
  {
    var_dump('static', $name, $arguments);
  }
  */

  /*
  # Fourth version - magic toString

  public function __toString(): string
  {
    return 1;
  }
  */

  /*
  # Fifth version - magic invoke

  public function __invoke()
  {
    var_dump('Invoked');
  }
  */

  private float $amount;
  private int $id = 1;
  private string $accountNumber = '0123456789';

  public function __debugInfo(): ?array
  {
    return [
      'id' => $this->id,
      'accountNumber' => '****' . substr($this->accountNumber, -4)
    ];
  }
}