<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\InvoiceService;
use App\View;
use App\Models\Invoice;
use App\Attributes\Get;
use App\Enums\InvoiceStatus;
use App\Enums\Color;

class InvoiceController
{

  // public function __construct(private InvoiceService $invoiceService)
  // {
  //   # Constructor DEPENDENCY INJECTION
  // }

  // public function store()
  // {
  //   $name = $_GET['name'];
  //   $amount = $_GET['amount'];

  //   $this->invoiceService->process(
  //     ['name' => $name],
  //     $amount
  //   );
  // }

  #[Get('/invoices')]
  public function index(): View
  {
    # var_dump(InvoiceStatus::fromColor(Color::Green));
    # var_dump(InvoiceStatus::cases());
    var_dump(enum_exists(InvoiceStatus::class));

    $invoices = (new Invoice)->all(InvoiceStatus::Paid);

    return View::make('invoices/index', ['invoices' => $invoices]);
  }

}