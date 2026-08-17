<?php

namespace Database\Factories;

use App\Enums\Cardapio\DestinoImpressao;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Categoria>
 */
class CategoriaFactory extends Factory
{
    protected $model = Categoria::class;

    public function definition(): array
    {
        return [
            'nome' => fake()->unique()->words(2, true),
            'destino_impressao' => fake()->randomElement(DestinoImpressao::cases())->value,
            'ativo' => true,
        ];
    }

    public function inativa(): static
    {
        return $this->state(fn (array $attributes) => [
            'ativo' => false,
        ]);
    }
}
