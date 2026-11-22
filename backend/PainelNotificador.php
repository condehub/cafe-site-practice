<?php 

declare(strict_types=1);

final readonly class PedidoPronto { 
  function __construct (
    public int $pedidoId,
    public string $nomeCliente,
    public string $resumoItens,
    public ?string $telefoneCliente = null,
  ) {}
}
