<?php

namespace Database\Factories;

use App\Models\GrupoEquivalencia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<GrupoEquivalencia>
 */
class GrupoEquivalenciaFactory extends Factory
{
    protected $model = GrupoEquivalencia::class;

    public function definition(): array
    {
        return [
            'nome' => fake()->unique()->words(2, true),
            'custo_medio_ponderado' => 0,
        ];
    }
}
