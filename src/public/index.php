<?php

use App\Customer;

require_once __DIR__ . '/../vendor/autoload.php';

$customer = new Customer();

$customer->updateProfile();