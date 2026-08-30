<?php

namespace Database\Factories;

use App\Enums\VendaAvulsa\FormaPagamentoVendaAvulsa;
use App\Models\VendaAvulsa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<VendaAvulsa>
 */
class VendaAvulsaFactory extends Factory
{
    protected $model = VendaAvulsa::class;

    public function definition(): array
    {
        return [
            'valor_total' => 5.00,
            'forma_pagamento' => FormaPagamentoVendaAvulsa::DINHEIRO->value,
            'vendido_por' => null,
        ];
    }
}
