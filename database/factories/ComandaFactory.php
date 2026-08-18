<?php

namespace Database\Factories;

use App\Enums\Comanda\StatusComanda;
use App\Enums\Comanda\TipoComanda;
use App\Models\Comanda;
use App\Models\Mesa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Comanda>
 */
class ComandaFactory extends Factory
{
    protected $model = Comanda::class;

    public function definition(): array
    {
        return [
            'token' => Str::random(40),
            'mesa_id' => Mesa::factory(),
            'garcom_id' => null,
            'tipo' => TipoComanda::INDIVIDUAL->value,
            'status' => StatusComanda::ABERTA->value,
            'aberta_em' => now(),
        ];
    }

    public function fechada(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => StatusComanda::FECHADA->value,
            'fechada_em' => now(),
        ]);
    }

    public function compartilhada(): static
    {
        return $this->state(fn (array $attributes) => [
            'tipo' => TipoComanda::COMPARTILHADA->value,
        ]);
    }
}
