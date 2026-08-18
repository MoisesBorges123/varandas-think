<?php

namespace App\DTO\Estoque;

use App\DTO\Base\DTOBase;

/**
 * Mesma exceção pragmática do ReceitaDTO: o dado real são os itens da
 * compra (lista), não campos escalares.
 */
class CompraManualDTO extends DTOBase
{
    private ?int $fornecedorId = null;

    private ?string $dataCompra = null;

    /** @var array<int, array{ingrediente_id: int, quantidade: float, unidade: string, valor_total_item: float}> */
    private array $itens = [];

    private ?int $createdBy = null;

    public function setFornecedorId(?int $fornecedorId): self
    {
        $this->fornecedorId = $fornecedorId;

        return $this;
    }

    public function getFornecedorId(): ?int
    {
        return $this->fornecedorId;
    }

    public function setDataCompra(?string $dataCompra): self
    {
        $this->dataCompra = $dataCompra;

        return $this;
    }

    public function getDataCompra(): ?string
    {
        return $this->dataCompra;
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
            'fornecedor_id' => $this->fornecedorId,
            'data_compra' => $this->dataCompra,
            'itens' => $this->itens,
            'created_by' => $this->createdBy,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->fornecedorId, 'fornecedor_id');
        $this->assertPresente($this->dataCompra, 'data_compra');

        foreach ($this->itens as $item) {
            $this->assertPresente($item['ingrediente_id'] ?? null, 'ingrediente_id');
            $this->assertPositivo($item['quantidade'] ?? null, 'quantidade');
            $this->assertPresente($item['unidade'] ?? null, 'unidade');
            $this->assertPositivo($item['valor_total_item'] ?? null, 'valor_total_item');
        }

        return $this;
    }

    public static function fromLivewire($componente): static
    {
        return (new static())
            ->setFornecedorId((int) $componente->fornecedorId)
            ->setDataCompra($componente->dataCompra)
            ->setItens(collect($componente->itens)->map(fn (array $item) => [
                'ingrediente_id' => (int) $item['ingrediente_id'],
                'quantidade' => (float) str_replace(',', '.', (string) $item['quantidade']),
                'unidade' => $item['unidade'],
                'valor_total_item' => (float) str_replace(',', '.', (string) $item['valor_total_item']),
            ])->all())
            ->setCreatedBy(auth()->id());
    }
}
