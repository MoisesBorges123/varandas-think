<?php

namespace App\DTO\Estoque;

use App\DTO\Base\DTOBase;

class ConversaoProdutoDTO extends DTOBase
{
    private ?int $produtoId = null;

    private ?int $grupoEquivalenciaId = null;

    private ?string $unidadeCompra = null;

    private ?float $quantidadeUnidadeCompra = null;

    private ?int $rendeQuantidadeVenda = null;

    public function setProdutoId(?int $produtoId): self
    {
        $this->produtoId = $produtoId;

        return $this;
    }

    public function getProdutoId(): ?int
    {
        return $this->produtoId;
    }

    public function setGrupoEquivalenciaId(?int $grupoEquivalenciaId): self
    {
        $this->grupoEquivalenciaId = $grupoEquivalenciaId;

        return $this;
    }

    public function getGrupoEquivalenciaId(): ?int
    {
        return $this->grupoEquivalenciaId;
    }

    public function setUnidadeCompra(?string $unidadeCompra): self
    {
        $this->unidadeCompra = $unidadeCompra;

        return $this;
    }

    public function getUnidadeCompra(): ?string
    {
        return $this->unidadeCompra;
    }

    public function setQuantidadeUnidadeCompra(?float $quantidadeUnidadeCompra): self
    {
        $this->quantidadeUnidadeCompra = $quantidadeUnidadeCompra;

        return $this;
    }

    public function getQuantidadeUnidadeCompra(): ?float
    {
        return $this->quantidadeUnidadeCompra;
    }

    public function setRendeQuantidadeVenda(?int $rendeQuantidadeVenda): self
    {
        $this->rendeQuantidadeVenda = $rendeQuantidadeVenda;

        return $this;
    }

    public function getRendeQuantidadeVenda(): ?int
    {
        return $this->rendeQuantidadeVenda;
    }

    public function toArray(): array
    {
        return [
            'produto_id' => $this->produtoId,
            'grupo_equivalencia_id' => $this->grupoEquivalenciaId,
            'unidade_compra' => $this->unidadeCompra,
            'quantidade_unidade_compra' => $this->quantidadeUnidadeCompra,
            'rende_quantidade_venda' => $this->rendeQuantidadeVenda,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->produtoId, 'produto_id');
        $this->assertPresente($this->grupoEquivalenciaId, 'grupo_equivalencia_id');
        $this->assertPresente($this->unidadeCompra, 'unidade_compra');
        $this->assertPositivo($this->quantidadeUnidadeCompra, 'quantidade_unidade_compra');
        $this->assertPositivo($this->rendeQuantidadeVenda, 'rende_quantidade_venda');

        return $this;
    }

    public static function fromLivewire($componente): static
    {
        return (new static())
            ->setProdutoId((int) $componente->produto->id)
            ->setGrupoEquivalenciaId((int) $componente->grupoEquivalenciaId)
            ->setUnidadeCompra($componente->unidadeCompra)
            ->setQuantidadeUnidadeCompra((float) str_replace(',', '.', (string) $componente->quantidadeUnidadeCompra))
            ->setRendeQuantidadeVenda((int) $componente->rendeQuantidadeVenda);
    }
}
