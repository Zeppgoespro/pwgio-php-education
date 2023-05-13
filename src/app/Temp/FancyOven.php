<?php

namespace App;

class FancyOven
{

  #private ToasterPro $toaster; # composition

  public function __construct(private ToasterPro $toaster) # property promotion + composition
  {
    $this->toaster = $toaster;
  }

  public function toast()
  {
    $this->toaster->toast();
  }

  public function toastBagel()
  {
    $this->toaster->toastBagel();
  }

}