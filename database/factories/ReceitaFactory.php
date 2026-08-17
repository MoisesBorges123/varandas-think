<?php

namespace Database\Factories;

use App\Enums\Cardapio\TipoProduto;
use App\Models\Produto;
use App\Models\Receita;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Receita>
 */
class ReceitaFactory extends Factory
{
    protected $model = Receita::class;

    public function definition(): array
    {
        return [
            'produto_id' => Produto::factory()->state(['tipo' => TipoProduto::PREPARADO->value]),
        ];
    }
}
