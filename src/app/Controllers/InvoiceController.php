<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\InvoiceService;

class InvoiceController
{

  public function __construct(private InvoiceService $invoice_service)
  {
    # Constructor DEPENDENCY INJECTION
  }

  public function store()
  {
    $name = $_GET['name'];
    $amount = $_GET['amount'];

    $this->invoice_service->process(
      ['name' => $name],
      $amount
    );
  }

}