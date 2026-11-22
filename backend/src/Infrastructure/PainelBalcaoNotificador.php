<?php

declare(strict_types=1);

namespace App\Infrastructure;

use App\Domain\Notificador;
use App\Domain\PedidoPronto;

final class PainelBalcaoNotificador implements Notificador
{
    public function notificar(PedidoPronto $pedido): void
    {
        echo sprintf(
            "[PAINEL] Pedido #%d pronto para %s (%s)\n",
            $pedido->pedidoId,
            $pedido->nomeCliente,
            $pedido->resumoItens
        );
    }
}

