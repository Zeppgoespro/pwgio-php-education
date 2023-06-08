<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\SomeInterface;

enum InvoiceStatus: int implements SomeInterface
{

  use invoiceStatusHelper; # Trait

  case Pending  = 0;
  case Paid     = 1;
  case Void     = 2;
  case Failed   = 3;

  public function toString(): string
  {
    return match($this) {
      self::Paid    => 'Paid',
      self::Void    => 'Void',
      self::Failed  => 'Failed',
      default => 'Pending'
    };
  }

  public function color(): Color
  {
    return match($this) {
      self::Paid    => Color::Green,
      self::Void    => Color::Gray,
      self::Failed  => Color::Red,
      default => Color::Orange
    };
  }

  // public const PENDING  = 0;
  // public const PAID     = 1;
  // public const VOID     = 2;
  // public const FAILED   = 3;

  // public static function all(): array
  // {
  //   return [
  //     self::PENDING,
  //     self::PAID,
  //     self::VOID,
  //     self::FAILED
  //   ];
  // }

}