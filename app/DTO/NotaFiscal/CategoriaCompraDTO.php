<?php

namespace App\DTO\NotaFiscal;

use App\DTO\Base\DTOBase;

class CategoriaCompraDTO extends DTOBase
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
        return [
            'nome' => $this->nome,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->nome, 'nome');

        return $this;
    }

    public static function fromLivewire($componente): static
    {
        return (new static())->setNome($componente->novaCategoriaNome);
    }
}
