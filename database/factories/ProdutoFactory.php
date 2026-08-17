<?php

namespace Database\Factories;

use App\Enums\Cardapio\TipoProduto;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Produto>
 */
class ProdutoFactory extends Factory
{
    protected $model = Produto::class;

    public function definition(): array
    {
        return [
            'categoria_id' => Categoria::factory(),
            'nome' => fake()->unique()->words(3, true),
            'tipo' => fake()->randomElement(TipoProduto::cases())->value,
            'ativo' => true,
            'disponivel' => true,
            'valida_estoque_automatico' => true,
        ];
    }

    public function inativo(): static
    {
        return $this->state(fn (array $attributes) => ['ativo' => false]);
    }

    public function indisponivel(): static
    {
        return $this->state(fn (array $attributes) => ['disponivel' => false]);
    }

    public function comPrecoInicial(float $preco = 10.00): static
    {
        return $this->afterCreating(function (Produto $produto) use ($preco): void {
            $produto->precos()->create([
                'preco' => $preco,
                'vigente_desde' => now(),
            ]);
        });
    }
}
