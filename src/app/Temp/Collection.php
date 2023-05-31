<?php

namespace App\Temp;

class Collection implements \IteratorAggregate
{

  public function __construct(private array $items)
  {
  }

  public function getIterator()
  {
    return new \ArrayIterator($this->items);
  }

}