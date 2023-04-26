<?php

use App\Invoice;
use App\InvoiceCollection;

require_once __DIR__ . '/../vendor/autoload.php';

// foreach(new App\Invoice(25) as $key => $value):
//   echo $key . ' = ' . $value . PHP_EOL;
// endforeach;

$invoiceCollection = new InvoiceCollection([new Invoice(15), new Invoice(25), new Invoice(50)]);

foreach($invoiceCollection as $invoice):
  // echo '<pre>';
  // var_dump($invoice);
  // echo '</pre>';
  if(isset($invoice->id) && isset($invoice->amount)):
    echo $invoice->id . ' - ' . $invoice->amount . '<br />' . PHP_EOL;
  endif;
endforeach;