<?php

namespace App\DTO\Pedido;

use App\DTO\Base\DTOBase;

/**
 * Compartilhado entre o lançamento pelo garçom (painel) e o pedido do
 * cliente (app) — mesmo padrão de AbrirComandaDTO. `lancadoPor` só é
 * preenchido no caminho do garçom (ver App\Models\ItemPedido).
 */
class AdicionarItemPedidoDTO extends DTOBase
{
    private ?int $comandaId = null;

    private ?int $produtoId = null;

    private ?int $quantidade = null;

    private ?string $pedidoPorNome = null;

    private ?int $lancadoPor = null;

    public function setComandaId(?int $comandaId): self
    {
        $this->comandaId = $comandaId;

        return $this;
    }

    public function getComandaId(): ?int
    {
        return $this->comandaId;
    }

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

    public function setPedidoPorNome(?string $pedidoPorNome): self
    {
        $this->pedidoPorNome = $pedidoPorNome;

        return $this;
    }

    public function getPedidoPorNome(): ?string
    {
        return $this->pedidoPorNome;
    }

    public function setLancadoPor(?int $lancadoPor): self
    {
        $this->lancadoPor = $lancadoPor;

        return $this;
    }

    public function getLancadoPor(): ?int
    {
        return $this->lancadoPor;
    }

    public function toArray(): array
    {
        return [
            'comanda_id' => $this->comandaId,
            'produto_id' => $this->produtoId,
            'quantidade' => $this->quantidade,
            'pedido_por_nome' => $this->pedidoPorNome,
            'lancado_por' => $this->lancadoPor,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->comandaId, 'comanda_id');
        $this->assertPresente($this->produtoId, 'produto_id');
        $this->assertPositivo($this->quantidade, 'quantidade');

        return $this;
    }

    public static function fromLivewire($componente): static
    {
        return (new static())
            ->setComandaId((int) $componente->comandaId)
            ->setProdutoId((int) $componente->produtoSelecionadoId)
            ->setQuantidade((int) $componente->quantidade)
            ->setPedidoPorNome($componente->pedidoPorNome ?: null);
    }
}
