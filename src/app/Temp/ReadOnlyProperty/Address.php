<?php

declare(strict_types=1);

namespace App\Temp\ReadOnlyProperty;

class Address
{

public readonly string $street;
public readonly string $city;
public readonly string $state;
public readonly string $postalCode;
public readonly string $country;

public function __construct(
  string $street,
  string $city,
  string $state,
  string $postalCode,
  string $country
)
{
  $this->street = $street;
  $this->city = $city;
  $this->state = $state;
  $this->postalCode = $postalCode;
  $this->country = $country;
}

// public function getStreet(): string
// {
//   return $this->street;
// }

}