<?php

namespace App;

class Toaster
{

  public array  $slices = [];
  public int    $size   = 2;

  public function addSlice(string $slice):void
  {
    if (count($this->slices) < $this->size):
      $this->slices[] = $slice;
      echo 'Added slice: ' . $slice . PHP_EOL . '<br />';
    endif;
  }

  public function toast()
  {
    foreach ($this->slices as $i => $slice) {
      $slice_text = is_null($slice) ? '' : $slice;
      echo ($i + 1) . ': Toasting ' . $slice_text . PHP_EOL . '<br />';
    }
  }

}