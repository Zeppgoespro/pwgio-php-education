<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Ticket;
use App\Attributes\Route;

class GeneratorExampleController
{

  public function __construct(private Ticket $ticketModel)
  {
  }

  #[Route('/examples/generator')]
  public function index()
  {
    foreach ($this->ticketModel->all() as $ticket):
      # echo $ticket->id . ': ' . substr($ticket->content, 0, 15) . '<br />'; # Error because I have Fetch_ASSOC as default
      echo $ticket['id'] . ': ' . substr($ticket['content'], 0, 25) . '<br />';
    endforeach;
  }

  /*
  public function index()
  {
    $numbers = $this->lazyRange(1, 30);

    // echo $numbers->current() . '. ';

    // $numbers->next();

    // echo $numbers->current() . '. ';

    // $numbers->next();

    // echo $numbers->getReturn();

    foreach ($numbers as $key => $number):
      echo $key . ': ' . $number . '<br />';
    endforeach;
  }

  private function lazyRange(int $start, int $end): Generator
  {
    for ($i = $start; $i <= $end; $i++):
      yield $i * 1 => $i;
    endfor;

    // echo 'Hello! ';
    // yield $start;
    // echo 'My friend. ';
    // yield $end;
    // return 'You\'re the best.';
  }
  */

}