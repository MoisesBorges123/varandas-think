<?php

namespace App\DTO\VendaAvulsa;

use App\DTO\Base\DTOBase;
use App\Enums\VendaAvulsa\FormaPagamentoVendaAvulsa;

/**
 * Carrinho de uma venda avulsa (CLAUDE.md seção 3.2) — 1 ou mais produtos,
 * um único pagamento. Mesma exceção pragmática do CompraManualDTO: o dado
 * real é a lista de itens, não campos escalares.
 */
class VenderAvulsoDTO extends DTOBase
{
    /** @var array<int, array{produto_id: int, quantidade: int}> */
    private array $itens = [];

    private ?string $formaPagamento = null;

    /**
     * @param  array<int, array{produto_id: int, quantidade: int}>  $itens
     */
    public function setItens(array $itens): self
    {
        $this->itens = $itens;

        return $this;
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function setFormaPagamento(?string $formaPagamento): self
    {
        $this->formaPagamento = $formaPagamento;

        return $this;
    }

    public function getFormaPagamento(): ?string
    {
        return $this->formaPagamento;
    }

    public function toArray(): array
    {
        return [
            'itens' => $this->itens,
            'forma_pagamento' => $this->formaPagamento,
        ];
    }

    public function validate(): self
    {
        if ($this->itens === []) {
            throw new \InvalidArgumentException('Adicione ao menos um item à venda.');
        }

        foreach ($this->itens as $item) {
            $this->assertPresente($item['produto_id'] ?? null, 'produto_id');
            $this->assertPositivo($item['quantidade'] ?? null, 'quantidade');
        }

        $this->assertPresente($this->formaPagamento, 'forma_pagamento');

        if (FormaPagamentoVendaAvulsa::tryFrom((string) $this->formaPagamento) === null) {
            throw new \InvalidArgumentException('Forma de pagamento inválida.');
        }

        return $this;
    }
}
