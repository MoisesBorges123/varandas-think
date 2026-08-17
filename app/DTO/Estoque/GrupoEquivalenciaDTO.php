<?php

namespace App\DTO\Estoque;

use App\DTO\Base\DTOBase;

class GrupoEquivalenciaDTO extends DTOBase
{
    private ?string $nome = null;

    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function toArray(): array
    {
        return array_filter([
            'nome' => $this->nome,
        ], fn ($valor) => $valor !== null);
    }

    public function validate(): self
    {
        $this->assertPresente($this->nome, 'nome');

        return $this;
    }

    public static function fromLivewire($componente): static
    {
        return (new static())->setNome($componente->nome);
    }
}
