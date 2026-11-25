<?php

declare(strict_types=1);

namespace Cafeteria\Domain;

final readonly class Dinheiro
{
  public function __construct(
    public int $centavos
  ) {
    if ($centavos < 0) {
      throw new \InvalidArgumentException("O valor não deve ser menor que 0.");
    }
  }
  public function somar(self $outro): self
  {
    return new self($this->centavos + $outro->centavos);
  }
  public function formatar(): string
  {
    return 'R$ ' . number_format($this->centavos / 100, 2, ',', '.');
  }
}