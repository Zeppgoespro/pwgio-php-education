<?php

declare(strict_types=1);

namespace App\Temp\PureIntersectionType;

class MyService
{

  public function __construct(private Syncable&Payable $entity)
  {
  }

  public function handle(): void
  {
    $this->entity->pay();
    $this->entity->sync();
  }

}