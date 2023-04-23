<?php

use App\Customer;
use App\Invoice;

require_once __DIR__ . '/../vendor/autoload.php';

# $invoice = new Invoice(new Customer(['foo' => 'bar']));

// try {
//   $invoice->process(-25);
// } catch(\App\Exception\MissingBillingInfoException $e) {
//   # echo $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . PHP_EOL;
//   echo 'Some error' . PHP_EOL;
// } catch(\InvalidArgumentException) {
//   echo 'Invalid argument exeption baby' . PHP_EOL;
// }

// try {
//   $invoice->process(25);
// } catch (\App\Exception\MissingBillingInfoException | \InvalidArgumentException $e) {
//   # echo $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . PHP_EOL;
//   echo $e->getMessage() . PHP_EOL;
// }

// try {
//   $invoice->process(25);
// } catch (\Exception $e) {
//   # echo $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . PHP_EOL;
//   echo $e->getMessage() . PHP_EOL;
// } finally {
//   echo 'Finally block' . PHP_EOL;
// }

// var_dump(process($invoice));

// function foo() {
//   echo 'foo' . PHP_EOL;

//   return false;
// }

// function process($invoice) {
//   try {
//     $invoice->process(-25);

//     return true;

//   } catch (\Exception $e) {
//     # echo $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . PHP_EOL;
//     echo $e->getMessage() . PHP_EOL;

//     return foo();

//   } finally {
//     echo 'Finally block' . PHP_EOL;

//     return -1;
//   }
// }

// set_exception_handler(function (\Throwable $e) {
//   var_dump($e->getMessage());
// });

// try {
//   echo array_rand([], 1);
// } catch (\Throwable $e) {
//   echo $e->getMessage() . PHP_EOL;
// }

# echo array_rand([], 1);

$invoice = new Invoice(new Customer());

$invoice->process(-25);