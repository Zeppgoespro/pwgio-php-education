<?php

namespace App;

// /**
//  * @property-read int $x
//  * @property-write float $y
//  */

/**
 * @method static int foo(string $x)
 */


class Transaction
{

  public function __call(string $name, array $arguments)
  {
    #
  }

  // public function __callStatic(string $name, array $arguments)
  // {
  //   #
  // }

  // public function __get(string $name)
  // {
  //   //
  // }

  // public function __set($name, $value): void
  // {
  //   //
  // }

  // /** @var Customer */
  // private Customer $customer;
  // /** @var float */
  // private float $amount;

  // /**
  //  * @param Customer[] $arr
  //  */
  // public function foo(array $arr)
  // {

  //   #/** @var Customer[] $obj */
  //   foreach($arr as $obj):
  //     $obj->name;
  //   endforeach;

  // }

  // /**
  //  * Some description
  //  *
  //  * @param Customer $customer
  //  * @param float|int $amount
  //  *
  //  * @throws \RuntimeException
  //  * @throws \InvalidArgumentException
  //  *
  //  * @return bool
  //  */

  // public function process(Customer $customer, float|int $amount): bool
  // {
  //   #
  //   # processing
  //   #

  //   return true;
  // }

}