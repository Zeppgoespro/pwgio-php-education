<?php

use App\PaymentGateway\Paddle\Transaction;
use App\Enums\Status;

require_once __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction();

$transaction->setStatus(Status::DECLINED);

var_dump($transaction);