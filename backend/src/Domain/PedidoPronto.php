<?php

declare(strict_types=1);

namespace App\Domain;

final readonly class PedidoPronto
{
    public function __construct(
        public int $pedidoId,
        public string $nomeCliente,
        public string $resumoItens,
        public ?string $telefoneCliente = null,
    ) {}
}

