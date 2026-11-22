<?php

declare(strict_types=1);

namespace App\Infrastructure;

use App\Domain\Notificador;
use App\Domain\PedidoPronto;

final class WhatsAppNotificador implements Notificador
{
    public function __construct(
        private readonly string $apiToken,
    ) {}

    public function notificar(PedidoPronto $pedido): void
    {
        if ($pedido->telefoneCliente === null) {
            return;
        }

        echo sprintf(
            "[WHATSAPP -> %s] Olá %s, seu pedido #%d (%s) está pronto!\n",
            $pedido->telefoneCliente,
            $pedido->nomeCliente,
            $pedido->pedidoId,
            $pedido->resumoItens
        );
    }
}

