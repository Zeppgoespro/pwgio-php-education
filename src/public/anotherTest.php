<?php

# Warning! This is not the main index, but test, which created for use in another lesson with dependent files in Temp (app/Temp) directory.

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use App\Temp\Enums\PaymentStatus;
use App\Temp\Enums\Payment;
use App\Temp\FinalConstant\InvoiceQuery;
use App\Temp\NewInitializers\Customer;
use App\Temp\ReadOnlyProperty\Address;
use App\Temp\CompositionVsInheritance\Invoice;
use App\Temp\CompositionVsInheritance\SalesTaxCalculator;

/* Array unpacking with string keys */

// $array1 = ['a' => 1, 2, 3];
// $array2 = [4, 5, 6];

// $array3 = [...$array1, ...$array2];

// print_r($array3);

/* Enumerations */

// $payment = new Payment();

// # $payment->updateStatus(5);
// $payment->updateStatus(PaymentStatus::PAID);

// # echo $payment->status() . PHP_EOL;
// # echo $payment->status()->name . PHP_EOL;
// echo $payment->status()->text() . PHP_EOL;
// echo $payment->status()->value . PHP_EOL;

/* Readonly properties */

// $address = new Address(
//   'Bakhchivandzhi 8',
//   'Yekaterinburg',
//   'Sverdlovskaya obl.',
//   '620000',
//   'Russia'
// );

// # echo $address->getStreet() . PHP_EOL;
// echo $address->street . PHP_EOL;

/* Pure intersection types (&) */

# Within App/Temp/PureIntersectionType

/* NEVER return type */

// function foo(): never
// {
//   echo 1 . PHP_EOL;
//   exit;
// }

// foo();

// echo 'I should NEVER be printed';

/* array_is_list */

// $list = ['a', 'b', 'c'];
// $notList = [1 => 'a', 'b', 'c'];

// var_dump(array_is_list($list));
// var_dump(array_is_list($notList));

// $list = array_filter($list, fn(string $value) => $value !== 'b');

// var_dump($list);
// var_dump(array_is_list($list));

// $list = array_values($list);

// var_dump($list);
// var_dump(array_is_list($list));

/* First-class callable syntax */

// function sum(float ...$num): float
// {
//   return array_sum($num);
// }

// # $closure = Closure::fromCallable('sum');
// $closure = sum(...);

// var_dump($closure);

// echo $closure(2, 5) . PHP_EOL;

/* NEW keyword in initializers */

// $customer = new Customer();

// var_dump($customer->address);

/* FINAL constants */

// echo InvoiceQuery::DEFAULT_LIMIT . PHP_EOL;

/* Composition vs Inheritance in PHP With Practical Examples - App\Temp\CompositionVsInheritance\ */

$SalesTaxCalculator = new SalesTaxCalculator();

(new Invoice($SalesTaxCalculator))->create(
  [
    ['description' => 'Item 1', 'quantity' => 1, 'unitPrice' => 15.25],
    ['description' => 'Item 2', 'quantity' => 2, 'unitPrice' => 2],
    ['description' => 'Item 3', 'quantity' => 3, 'unitPrice' => 0.25]
  ]
);