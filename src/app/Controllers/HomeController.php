<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\InvoiceService;
use App\View;
use App\Attributes\Route;
use App\Attributes\Get;
use App\Attributes\Post;
use App\Attributes\Put;

class HomeController
{

  public function __construct(private InvoiceService $invoiceService)
  {
  }

  #[Get('/')] # positional
  #[Get(routePath: '/home')] # named
  #[Route('/')] # I can use many attributes
  public function index(): View
  {
    $this->invoiceService->process([], 25);

    return View::make('index');
  }

  #[Post('/')]
  public function store()
  {

  }

  #[Put('/')]
  public function update()
  {

  }

}