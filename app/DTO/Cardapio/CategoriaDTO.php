<?php

namespace App\DTO\Cardapio;

use App\DTO\Base\DTOBase;
use App\Enums\Cardapio\DestinoImpressao;

class CategoriaDTO extends DTOBase
{
    private ?string $nome = null;

    private ?DestinoImpressao $destinoImpressao = null;

    private bool $ativo = true;

    private ?int $createdBy = null;

    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setDestinoImpressao(DestinoImpressao|string|null $destinoImpressao): self
    {
        $this->destinoImpressao = is_string($destinoImpressao)
            ? DestinoImpressao::from($destinoImpressao)
            : $destinoImpressao;

        return $this;
    }

    public function getDestinoImpressao(): ?DestinoImpressao
    {
        return $this->destinoImpressao;
    }

    public function setAtivo(bool $ativo): self
    {
        $this->ativo = $ativo;

        return $this;
    }

    public function getAtivo(): bool
    {
        return $this->ativo;
    }

    public function setCreatedBy(?int $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function toArray(): array
    {
        return array_filter([
            'nome' => $this->nome,
            'destino_impressao' => $this->destinoImpressao?->value,
            'ativo' => $this->ativo,
            'created_by' => $this->createdBy,
        ], fn ($valor) => $valor !== null);
    }

    public function validate(): self
    {
        $this->assertPresente($this->nome, 'nome');
        $this->assertPresente($this->destinoImpressao?->value, 'destino_impressao');

        return $this;
    }

    public static function fromLivewire($componente): static
    {
        return (new static())
            ->setNome($componente->nome)
            ->setDestinoImpressao($componente->destinoImpressao)
            ->setAtivo((bool) $componente->ativo)
            ->setCreatedBy(auth()->id());
    }
}
