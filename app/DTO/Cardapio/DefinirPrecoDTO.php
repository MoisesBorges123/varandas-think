<?php

namespace App\DTO\Cardapio;

use App\DTO\Base\DTOBase;

class DefinirPrecoDTO extends DTOBase
{
    private ?int $produtoId = null;

    private ?float $preco = null;

    private ?int $createdBy = null;

    public function setProdutoId(?int $produtoId): self
    {
        $this->produtoId = $produtoId;

        return $this;
    }

    public function getProdutoId(): ?int
    {
        return $this->produtoId;
    }

    public function setPreco(?float $preco): self
    {
        $this->preco = $preco;

        return $this;
    }

    public function getPreco(): ?float
    {
        return $this->preco;
    }

    public function setCreatedBy(?int $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getCreatedBy(): ?int
    {
        return $this->createdBy;
    }

    public function toArray(): array
    {
        return [
            'produto_id' => $this->produtoId,
            'preco' => $this->preco,
            'created_by' => $this->createdBy,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->produtoId, 'produto_id');
        $this->assertPositivo($this->preco, 'preco');

        return $this;
    }

    public static function fromLivewire($componente): static
    {
        return (new static())
            ->setProdutoId((int) $componente->produto->id)
            ->setPreco((float) str_replace(',', '.', $componente->novoPreco))
            ->setCreatedBy(auth()->id());
    }
}
