<?php

declare(strict_types=1);

namespace App\Classes;

class Invoice
{

  public function index(): string
  {
    # unset($_SESSION['count']);
    # var_dump($_SESSION);

    setcookie(
      'userName',
      'Zeppkka',
      time() - (24 * 60 * 60)
    ); # cookie deletion through negative date

    return 'Invoices';
  }

  public static function create(): string
  {
    return '<form action="/invoices/create" method="post">
              <label>Amount</label>
              <input type="text" name="amount" />
            </form>';
    # # # #
  }

  public function store()
  {
    $amount = $_POST['amount'];

    var_dump($amount);
  }

}