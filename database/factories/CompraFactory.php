<?php

namespace Database\Factories;

use App\Enums\Estoque\FonteCompra;
use App\Models\Compra;
use App\Models\Fornecedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Compra>
 */
class CompraFactory extends Factory
{
    protected $model = Compra::class;

    public function definition(): array
    {
        return [
            'fornecedor_id' => Fornecedor::factory(),
            'chave_acesso_nf' => fake()->unique()->numerify(str_repeat('#', 44)),
            'fonte' => FonteCompra::SCRAPING_SEFAZ->value,
            'data_compra' => now()->toDateString(),
            'valor_produtos' => 100,
            'valor_total' => 100,
        ];
    }
}
