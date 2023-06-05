<?php

declare(strict_types=1);

namespace App\Temp\Enums;

/* Classic solution */
// class PaymentStatus
// {

//   public const PAID     = 1;
//   public const VOID     = 2;
//   public const DECLINED = 3;

// }

/* After 8.1 */
enum PaymentStatus: int
{

  case PAID = 1;
  case VOID = 2;
  case DECLINED = 3;

  public function text(): string
  {
    return match ($this) {
      self::PAID      => 'Paid',
      self::VOID      => 'Void',
      self::DECLINED  => 'Declined'
    };
  }

}