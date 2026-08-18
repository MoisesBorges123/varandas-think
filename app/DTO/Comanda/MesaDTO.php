<?php

namespace App\DTO\Comanda;

use App\DTO\Base\DTOBase;

class MesaDTO extends DTOBase
{
    private ?string $numero = null;

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function toArray(): array
    {
        return [
            'numero' => $this->numero,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->numero, 'numero');

        return $this;
    }

    public static function fromLivewire($componente): static
    {
        return (new static())->setNumero($componente->numero);
    }
}
