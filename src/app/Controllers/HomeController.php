<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;
use App\Models\User;
use App\Models\Invoice;
use App\Models\SignUp;

class HomeController
{

  public function index(): View
  {
    $email = 'sponge@bkex.com';
    $name = 'Sponge Bob';
    $amount = 888;

    $user_model = new User();
    $invoice_model = new Invoice();

    $invoice_id = (new SignUp($user_model, $invoice_model))->register(
      [
        'email' => $email,
        'name' => $name
      ],
      [
        'amount' => $amount
      ]
    );

    return View::make('index', ['invoice' => $invoice_model->find($invoice_id)]);
  }

}