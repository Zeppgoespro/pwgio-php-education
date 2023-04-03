<?php

namespace App;

class ToasterPro extends Toaster
{

  public function __construct()
  {
    parent::__construct();

    $this->size = 4;
  }

  public function addSlice(string $slice): void
  {
    parent::addSlice($slice);
  }

  public function toastBagel()
  {
    foreach ($this->slices as $i => $slice) {
      $slice_text = is_null($slice) ? '' : $slice;
      echo ($i + 1) . ': Toasting ' . $slice_text . ' with bageling' . PHP_EOL;
    }
  }

  public function fooBoba():void
  {
    throw new \Exception('Not supported');
  }

}