<?php

namespace Database\Factories;

use App\Models\Fornecedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Fornecedor>
 */
class FornecedorFactory extends Factory
{
    protected $model = Fornecedor::class;

    public function definition(): array
    {
        return [
            'cnpj' => fake()->unique()->numerify('##.###.###/####-##'),
            'razao_social' => fake()->company(),
            'nome_fantasia' => fake()->companySuffix(),
            'uf' => fake()->randomElement(['MG', 'SP', 'RJ', 'PR']),
        ];
    }
}
