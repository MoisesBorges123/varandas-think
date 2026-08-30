<?php

namespace Database\Factories;

use App\Enums\Pedido\OrigemItemPedido;
use App\Enums\Pedido\StatusItemPedido;
use App\Models\Comanda;
use App\Models\ItemPedido;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ItemPedido>
 */
class ItemPedidoFactory extends Factory
{
    protected $model = ItemPedido::class;

    public function definition(): array
    {
        $produto = Produto::factory()->comPrecoInicial()->create();

        return [
            'comanda_id' => Comanda::factory(),
            'produto_id' => $produto->id,
            'preco_produto_id' => $produto->precoAtual->id,
            'quantidade' => 1,
            'pedido_por_nome' => null,
            'origem' => OrigemItemPedido::GARCOM->value,
            'status' => StatusItemPedido::PENDENTE_APROVACAO->value,
            'hora_pedido' => now(),
        ];
    }

    public function pendenteAprovacao(): static
    {
        return $this->state(fn (array $attributes) => ['status' => StatusItemPedido::PENDENTE_APROVACAO->value]);
    }

    public function enviadoCozinha(): static
    {
        return $this->state(fn (array $attributes) => ['status' => StatusItemPedido::ENVIADO_COZINHA->value]);
    }

    public function pronto(): static
    {
        return $this->state(fn (array $attributes) => ['status' => StatusItemPedido::PRONTO->value]);
    }

    public function liberadoBalcao(): static
    {
        return $this->state(fn (array $attributes) => ['status' => StatusItemPedido::LIBERADO_BALCAO->value]);
    }

    public function deCliente(): static
    {
        return $this->state(fn (array $attributes) => [
            'origem' => OrigemItemPedido::CLIENTE_APP->value,
            'lancado_por' => null,
        ]);
    }
}
