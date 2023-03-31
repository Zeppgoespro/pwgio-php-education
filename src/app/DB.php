<?php

declare(strict_types=1);

namespace App;

class DB
{

  private static ?DB $instance = null;

  private function __construct(public array $config)
  {

  }

  public static function getInstance(array $config): DB
  {
    if (self::$instance === null):
      self::$instance = new DB($config);
    endif;

    return self::$instance;
  }

}