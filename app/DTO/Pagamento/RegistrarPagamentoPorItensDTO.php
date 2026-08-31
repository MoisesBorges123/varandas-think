<?php

namespace App\DTO\Pagamento;

use App\DTO\Base\DTOBase;
use App\Enums\Pagamento\FormaPagamento;

/**
 * Pagamento "por itens específicos" (CLAUDE.md seção 6.1) — o garçom
 * seleciona exatamente quais itens_pedido estão sendo pagos agora.
 */
class RegistrarPagamentoPorItensDTO extends DTOBase
{
    private ?int $comandaId = null;

    /** @var array<int, int> */
    private array $itemPedidoIds = [];

    private ?string $formaPagamento = null;

    private ?string $nomePagador = null;

    private ?string $deviceId = null;

    public function setComandaId(?int $comandaId): self
    {
        $this->comandaId = $comandaId;

        return $this;
    }

    public function getComandaId(): ?int
    {
        return $this->comandaId;
    }

    /**
     * @param  array<int, int>  $itemPedidoIds
     */
    public function setItemPedidoIds(array $itemPedidoIds): self
    {
        $this->itemPedidoIds = $itemPedidoIds;

        return $this;
    }

    public function getItemPedidoIds(): array
    {
        return $this->itemPedidoIds;
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

    public function setNomePagador(?string $nomePagador): self
    {
        $this->nomePagador = $nomePagador;

        return $this;
    }

    public function getNomePagador(): ?string
    {
        return $this->nomePagador;
    }

    public function setDeviceId(?string $deviceId): self
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    public function toArray(): array
    {
        return [
            'comanda_id' => $this->comandaId,
            'item_pedido_ids' => $this->itemPedidoIds,
            'forma_pagamento' => $this->formaPagamento,
            'nome_pagador' => $this->nomePagador,
            'device_id' => $this->deviceId,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->comandaId, 'comanda_id');

        if ($this->itemPedidoIds === []) {
            throw new \InvalidArgumentException('Selecione ao menos um item para pagar.');
        }

        $this->assertPresente($this->formaPagamento, 'forma_pagamento');

        $forma = FormaPagamento::tryFrom((string) $this->formaPagamento);
        if ($forma === null) {
            throw new \InvalidArgumentException('Forma de pagamento inválida.');
        }

        if ($forma->precisaDeTerminal() && ! $this->deviceId) {
            throw new \InvalidArgumentException('Nenhuma maquininha configurada para esta forma de pagamento.');
        }

        return $this;
    }
}
