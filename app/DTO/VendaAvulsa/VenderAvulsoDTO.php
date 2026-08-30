<?php

namespace App\DTO\VendaAvulsa;

use App\DTO\Base\DTOBase;
use App\Enums\VendaAvulsa\FormaPagamentoVendaAvulsa;

class VenderAvulsoDTO extends DTOBase
{
    private ?int $produtoId = null;

    private ?int $quantidade = null;

    private ?string $formaPagamento = null;

    public function setProdutoId(?int $produtoId): self
    {
        $this->produtoId = $produtoId;

        return $this;
    }

    public function getProdutoId(): ?int
    {
        return $this->produtoId;
    }

    public function setQuantidade(?int $quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getQuantidade(): ?int
    {
        return $this->quantidade;
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
            'produto_id' => $this->produtoId,
            'quantidade' => $this->quantidade,
            'forma_pagamento' => $this->formaPagamento,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->produtoId, 'produto_id');
        $this->assertPositivo($this->quantidade, 'quantidade');
        $this->assertPresente($this->formaPagamento, 'forma_pagamento');

        if (FormaPagamentoVendaAvulsa::tryFrom((string) $this->formaPagamento) === null) {
            throw new \InvalidArgumentException('Forma de pagamento inválida.');
        }

        return $this;
    }
}
