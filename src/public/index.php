<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\ClassA;
use App\MyInterface;

// $obj = new class(1, 2, 3) implements MyInterface #extends MyClass
// {

//   #use MyTrait;

//   public function __construct(public int $x, public int $y, public int $z)
//   {

//   }

// };

// foo($obj);

// function foo(MyInterface $obj) {
//   var_dump($obj);
// }

$obj = new ClassA(1,2);

var_dump($obj->bar());