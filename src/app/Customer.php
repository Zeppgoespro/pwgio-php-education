<?php

namespace App;

class Customer
{

  // use Mail;

  // public function updateProfile()
  // {
  //   echo 'Profile updated' . PHP_EOL;

  //   $this->sendEmail();
  // }

  // public function __construct(public string $name)
  // {

  // }

  # public string $name;

  public function __construct(
    private array $billingInfo = [])
  {

  }

  public function getBillingInfo(): array # getter
  {
    return $this->billingInfo;
  }

}