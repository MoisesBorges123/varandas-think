<?php

namespace App\DTO\Cardapio;

use App\DTO\Base\DTOBase;

class AvaliarProdutoDTO extends DTOBase
{
    private ?int $itemPedidoId = null;

    private ?int $nota = null;

    public function setItemPedidoId(?int $itemPedidoId): self
    {
        $this->itemPedidoId = $itemPedidoId;

        return $this;
    }

    public function getItemPedidoId(): ?int
    {
        return $this->itemPedidoId;
    }

    public function setNota(?int $nota): self
    {
        $this->nota = $nota;

        return $this;
    }

    public function getNota(): ?int
    {
        return $this->nota;
    }

    public function toArray(): array
    {
        return [
            'item_pedido_id' => $this->itemPedidoId,
            'nota' => $this->nota,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->itemPedidoId, 'item_pedido_id');
        $this->assertPositivo($this->nota, 'nota');

        if ($this->nota > 5) {
            throw new \InvalidArgumentException('A nota deve ser um valor entre 1 e 5.');
        }

        return $this;
    }
}
