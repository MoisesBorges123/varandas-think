<?php

namespace Database\Factories;

use App\Models\Mesa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Mesa>
 */
class MesaFactory extends Factory
{
    protected $model = Mesa::class;

    public function definition(): array
    {
        return [
            'numero' => (string) fake()->unique()->numberBetween(1, 999),
            'token' => Str::random(40),
        ];
    }
}
