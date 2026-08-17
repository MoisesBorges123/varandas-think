<?php

namespace Database\Factories;

use App\Models\GrupoEquivalencia;
use App\Models\Ingrediente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ingrediente>
 */
class IngredienteFactory extends Factory
{
    protected $model = Ingrediente::class;

    public function definition(): array
    {
        return [
            'grupo_equivalencia_id' => GrupoEquivalencia::factory(),
            'nome' => fake()->unique()->words(2, true),
            'unidade_medida' => fake()->randomElement(['kg', 'g', 'l', 'ml', 'un']),
            'codigo_fiscal' => fake()->numerify('########'),
        ];
    }

    public function semGrupo(): static
    {
        return $this->state(fn (array $attributes) => [
            'grupo_equivalencia_id' => null,
        ]);
    }
}
