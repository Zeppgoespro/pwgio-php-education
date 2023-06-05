<?php

declare(strict_types=1);

namespace App\Temp\Enums;

class Payment
{

  # private int $status;
  private PaymentStatus $status;

  public function updateStatus(
    # int $status
    PaymentStatus $status
  ): self
  {
    $this->status = $status;
    return $this;
  }

  public function status(): PaymentStatus # int
  {
    return $this->status;
  }

}