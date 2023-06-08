<?php

declare(strict_types=1);

namespace App\Enums;

enum HttpMethod: string
{

  case Get = 'get';
  case Post = 'post';
  case Put = 'Put';
  case Head = 'head';

}