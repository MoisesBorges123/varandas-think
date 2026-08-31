<?php

namespace App\DTO\Pagamento;

use App\DTO\Base\DTOBase;
use App\Enums\Pagamento\FormaPagamento;

/**
 * Pagamento "por valor livre" (CLAUDE.md seção 6.1) — abate um valor
 * solto do saldo total, sem vincular a itens específicos.
 */
class RegistrarPagamentoValorLivreDTO extends DTOBase
{
    private ?int $comandaId = null;

    private ?float $valor = null;

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

    public function setValor(?float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getValor(): ?float
    {
        return $this->valor;
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
            'valor' => $this->valor,
            'forma_pagamento' => $this->formaPagamento,
            'nome_pagador' => $this->nomePagador,
            'device_id' => $this->deviceId,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->comandaId, 'comanda_id');
        $this->assertPositivo($this->valor, 'valor');
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
