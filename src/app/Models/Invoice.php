<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\InvoiceStatus;
use App\Model;
use PDO;

class Invoice extends Model
{

  /* Old invoices MySQL table */

  // public function create(float $amount, int $user_id): int
  // {
  //   $stmt = $this->db()->prepare("INSERT INTO invoices (amount, user_id) VALUES (?,?)");

  //   $stmt->execute([$amount, $user_id]);

  //   return (int) $this->db->lastInsertId();
  // }

  // public function find(int $invoice_id): array
  // {
  //   $stmt = $this->db->prepare(
  //     'SELECT invoices.id, amount, users.full_name
  //      FROM invoices
  //      LEFT JOIN users ON users.id = user_id
  //      WHERE invoices.id = ?
  //     '
  //   );

  //   $stmt->execute([$invoice_id]);

  //   $invoice = $stmt->fetch();

  //   return $invoice ? $invoice : [];
  // }

  /* New invoices MySQL table */

  public function all(InvoiceStatus $status): array
  {
    $stmt = $this->db->prepare('SELECT `id`, `invoice_number`, `amount`, `status`
    FROM new_invoices
    WHERE `status` = ?');

    $stmt->execute([$status->value]);

    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }

}