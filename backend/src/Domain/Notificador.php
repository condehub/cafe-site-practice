<?php

declare(strict_types=1);

namespace App\Domain;

interface Notificador
{
    public function notificar(PedidoPronto $pedido): void;
}

