<?php

use App\Toaster;
use App\ToasterPro;

require_once __DIR__ . '/../vendor/autoload.php';

$toaster = new ToasterPro();

$toaster->addSlice(slice: 'bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->toastBagel();

$toaster->fooBoba();