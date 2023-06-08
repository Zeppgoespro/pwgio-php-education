<?php

declare(strict_types=1);

namespace App\Enums;


trait invoiceStatusHelper
{

  public static function fromColor(Color $color): InvoiceStatus
  {
    return match ($color) {
      Color::Green => InvoiceStatus::Paid,
      Color::Gray => InvoiceStatus::Void,
      Color::Red => InvoiceStatus::Failed,
      default => InvoiceStatus::Pending
    };
  }

}