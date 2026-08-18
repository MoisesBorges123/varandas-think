<?php

namespace Database\Factories;

use App\Models\Configuracao;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Configuracao>
 */
class ConfiguracaoFactory extends Factory
{
    protected $model = Configuracao::class;

    public function definition(): array
    {
        return [
            'bar_latitude' => -23.5505,
            'bar_longitude' => -46.6333,
            'raio_metros' => 100,
        ];
    }
}
