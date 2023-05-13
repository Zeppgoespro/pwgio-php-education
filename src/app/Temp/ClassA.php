<?php

namespace App;

class ClassA
{
  // protected static string $name = 'A';

  // public function getName(): string
  // {
  //   #var_dump(get_called_class());
  //   return static::$name;
  // }

  // public static function make(): static
  // {
  //   return new static();
  // }

  public function __construct(public int $x, public int $y)
  {

  }

  public function foo()
  {
    return 'foo';
  }

  public function bar(): object
  {
    // return new class($this->x, $this->y) extends classA
    // {
    //   public function __construct(public int $x, public int $y)
    //   {
    //     parent::__construct($x, $y);

    //     echo $this->foo();
    //   }
    // };

    // return new class($this->x, $this->y)
    // {
    //   public function __construct(public int $x, public int $y)
    //   {
    //     var_dump($x, $y);
    //   }
    // };

    return new class ($this)
    {
      public function __construct(ClassA $myObj)
      {
        var_dump($myObj);
      }
    };

  }

}