<?php

declare(strict_types=1);

namespace App\Temp\NewInitializers;

class Customer
{

  public function __construct(
    # public ?Address $address = null
    public Address $address = new Address
  )
  {
    # $this->address ??= new Address();
  }

}