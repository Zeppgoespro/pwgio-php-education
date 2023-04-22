<?php

require_once __DIR__ . '/../vendor/autoload.php';

$invoice = new \App\Invoice();

# $invoice2 = new $invoice();

# var_dump($invoice, $invoice2, \App\Invoice::create());

# $invoice2 = $invoice;

# var_dump($invoice, $invoice2, $invoice === $invoice2);

$invoice2 = clone $invoice;

var_dump($invoice, $invoice2, $invoice === $invoice2);