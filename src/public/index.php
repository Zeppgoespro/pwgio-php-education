<?php

require_once __DIR__ . '/../vendor/autoload.php';

$invoice = new \App\Invoice(15);

$invoice->amount = 35;

#echo $invoice->amount . PHP_EOL;

var_dump($invoice);