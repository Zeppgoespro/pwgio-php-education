<?php

namespace App;

class Toaster
{

  protected array  $slices;
  protected int    $size;

  public function __construct()
  {
    $this->slices = [];
    $this->size   = 2;
  }

  public function addSlice(string $slice):void
  {
    if (count($this->slices) < $this->size):
      $this->slices[] = $slice;
      echo 'Added slice: ' . $slice . PHP_EOL;
    endif;
  }

  public function toast()
  {
    foreach ($this->slices as $i => $slice) {
      $slice_text = is_null($slice) ? '' : $slice;
      echo ($i + 1) . ': Toasting ' . $slice_text . PHP_EOL;
    }
  }

  public function fooBoba():void
  {
    echo 'Great Boba';
  }

}