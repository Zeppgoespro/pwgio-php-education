<?php

declare(strict_types=1);

namespace App\Services;

class InvoiceService
{
  public function __construct(
    protected SalesTaxService $sales_tax_service,
    protected PaymentGatewayService $gateway_service,
    protected EmailService $email_service
  )
  {
  }

  public function process(array $customer, float $amount): bool
  {
    // $sales_tax_service = new SalesTaxService();
    // $gateway_service = new PaymentGatewayService();
    // $email_service = new EmailService();

    # 1. Calculate sales tax.
    $tax = $this->sales_tax_service->calculate($amount, $customer);

    # 2. Process invoice.
    if (! $this->gateway_service->charge($customer, $amount, $tax)):
      return false;
    endif;

    # 3. Send receipt.
    $this->email_service->send($customer, 'receipt');

    return true;
  }

}