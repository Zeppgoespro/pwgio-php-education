<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\InvoiceService;
use App\View;

class HomeController
{

  public function __construct(private InvoiceService $invoice_service)
  {
  }

  public function index(): View
  {
    $this->invoice_service->process([], 25);

    return View::make('index');
  }

}