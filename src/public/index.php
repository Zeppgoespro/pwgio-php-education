<?php

use App\PaymentGateway\Paddle\Transaction;

require_once __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction(25);

/*

# Trick for accessing private/protected properties

$reflectionProperty = new ReflectionProperty(Transaction::class, 'amount');
$reflectionProperty->setAccessible(true);
$reflectionProperty->setValue($transaction, 125);
var_dump($reflectionProperty->getValue($transaction));

*/

$transaction->copyFrom(new Transaction(100));

#$transaction->process();