<?php

namespace App;

use App\Exception\MissingBillingInfoException;
use App\Exception\InvoiceException;

class Invoice # implements \Serializable
{
  #use Mail;

  /*
  # First verion - magic get & magic set

  protected float $amount;

  public function __construct(float $amount)
  {
    $this->amount = $amount;
  }

  public function __get(string $name)
  {
    if (property_exists($this, $name)):
      return $this->$name;
    endif;

    return null;
  }

  public function __set(string $name, $value): void
  {
    if (property_exists($this, $name)):
      return $this->$name = $value;
    endif;

    return null;
  }
  */

  /*
  # Second verion - magic isset & magic unset

  protected array $data = [];

  public function __get(string $name)
  {
    if (array_key_exists($name, $this->data)):
      return $this->data[$name];
    endif;

    return null;
  }

  public function __set(string $name, $value): void
  {
    $this->data[$name] = $value;
  }

  public function __isset($name): bool
  {
    var_dump('isset');

    return array_key_exists($name, $this->data);
  }

  public function __unset($name): void
  {
    var_dump('unset');

    unset($this->data[$name]);
  }
  */

  /*
  # Third version - magic call & magic callStatic

  protected function process(float $amount, $description)
  {
    var_dump($amount, $description);
  }

  public function __call(string $name, array $arguments)
  {
    if (method_exists($this, $name)):
      call_user_func_array([$this, $name], $arguments);
    endif;
  }

  public static function __callStatic($name, $arguments)
  {
    var_dump('static', $name, $arguments);
  }
  */

  /*
  # Fourth version - magic toString

  public function __toString(): string
  {
    return 1;
  }
  */

  /*
  # Fifth version - magic invoke

  public function __invoke()
  {
    var_dump('Invoked');
  }
  */

  // private float $amount;
  // private int $id = 1;
  // private string $accountNumber = '0123456789';

  // public function __debugInfo(): ?array
  // {
  //   return [
  //     'id' => $this->id,
  //     'accountNumber' => '****' . substr($this->accountNumber, -4)
  //   ];
  // }

  // public function process()
  // {
  //   echo 'Processed invoice' . PHP_EOL;

  //   $this->sendEmail();
  // }

  // public ?Invoice $linkedInvoice = null;

  // public function __construct(public Customer $customer, public float $amount, public string $description)
  // {

  // }

  // public string $id;

  // public function __construct(
  //   public float $amount,
  //   public string $description,
  //   public string $creditCardNumber
  // )

  // {
  //   $this->id = uniqid('invoice_'); # creates unique id number

  //   # var_dump('__construct');
  // }

  // public static function create(): static
  // {
  //   return new static();
  // }

  // public function __clone(): void
  // {
  //   $this->id = uniqid('cloned_invoice_');

  //   # var_dump('__clone');
  // }

  // public function serialize()
  // {
  //   #
  // }

  // public function unserialize(string $data)
  // {
  //   #
  // }

  // public function __sleep(): array
  // {
  //   return ['id', 'amount'];
  // }

  // public function __wakeup(): void
  // {
  //   #
  // }

  // public function __serialize(): array
  // {
  //   return [
  //     'id' => $this->id,
  //     'amount' => $this->amount,
  //     'description' => $this->description,
  //     'creditCardNumber' => base64_encode($this->creditCardNumber),
  //     'foo' => 'bar'
  //   ];
  // }

  // public function __unserialize(array $data): void
  // {
  //   $this->id = $data['id'];
  //   $this->amount = $data['amount'];
  //   $this->description = $data['description'];
  //   $this->creditCardNumber = base64_decode($data['creditCardNumber']);
  //   # var_dump($data);
  // }

  public function __construct(public Customer $customer)
  {

  }

  public function process(float $amount): void
  {

    if ($amount <= 0):

      # throw new \InvalidArgumentException('Invalid invoice amount');
      throw InvoiceException::invalidAmount();

    endif;

    if (empty($this->customer->getBillingInfo())):

      # throw new \LogicException('Missing billing information');
      # throw new MissingBillingInfoException();
      # throw CustomException::missingBillingInfo(); # static

      throw InvoiceException::missingBillingInfo(); # static

    endif;

    echo 'Processing $' . $amount . ' invoice - ';

    sleep(2);

    echo 'OK' . PHP_EOL;

  }

}