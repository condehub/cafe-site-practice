<?php

declare(strict_types=1);

interface Notificador {
  public function notificar(PedidoPronto $pedido): void;
}
