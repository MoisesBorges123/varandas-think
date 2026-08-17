<?php

namespace App\DTO\Estoque;

use App\DTO\Base\DTOBase;

/**
 * Exceção pragmática ao padrão de setters campo-a-campo do DTOBase: o dado
 * real de uma receita é uma lista de itens (ingrediente + quantidade +
 * unidade), não campos escalares — carregar isso em setters individuais
 * não agregaria clareza.
 */
class ReceitaDTO extends DTOBase
{
    private ?int $produtoId = null;

    /** @var array<int, array{ingrediente_id: int, quantidade: float, unidade_medida: string}> */
    private array $itens = [];

    public function setProdutoId(?int $produtoId): self
    {
        $this->produtoId = $produtoId;

        return $this;
    }

    public function getProdutoId(): ?int
    {
        return $this->produtoId;
    }

    public function setItens(array $itens): self
    {
        $this->itens = $itens;

        return $this;
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function toArray(): array
    {
        return [
            'produto_id' => $this->produtoId,
            'itens' => $this->itens,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->produtoId, 'produto_id');

        foreach ($this->itens as $item) {
            $this->assertPresente($item['ingrediente_id'] ?? null, 'ingrediente_id');
            $this->assertPositivo($item['quantidade'] ?? null, 'quantidade');
            $this->assertPresente($item['unidade_medida'] ?? null, 'unidade_medida');
        }

        return $this;
    }

    public static function fromLivewire($componente): static
    {
        return (new static())
            ->setProdutoId((int) $componente->produto->id)
            ->setItens(collect($componente->itens)->map(fn (array $item) => [
                'ingrediente_id' => (int) $item['ingrediente_id'],
                'quantidade' => (float) str_replace(',', '.', (string) $item['quantidade']),
                'unidade_medida' => $item['unidade_medida'],
            ])->all());
    }
}
