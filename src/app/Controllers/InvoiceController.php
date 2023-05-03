<?php

declare(strict_types=1);

namespace App\Controllers;
use App\View;
use App\Invoice;

class InvoiceController
{

  public function index(): View
  {
    return View::make('invoices/index');
  }

  public static function create(): View
  {
    return View::make('invoices/create');
  }

  public function store()
  {
    $invoice = new Invoice();

    $amount = $_POST['amount'];

    var_dump($amount);
  }

}