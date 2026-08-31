<?php

namespace Database\Factories;

use App\Enums\Pagamento\FormaPagamento;
use App\Enums\Pagamento\StatusPagamento;
use App\Enums\Pagamento\TipoPagamento;
use App\Models\Comanda;
use App\Models\Pagamento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pagamento>
 */
class PagamentoFactory extends Factory
{
    protected $model = Pagamento::class;

    public function definition(): array
    {
        return [
            'comanda_id' => Comanda::factory(),
            'tipo' => TipoPagamento::VALOR_LIVRE->value,
            'valor' => 10.00,
            'nome_pagador' => null,
            'forma_pagamento' => FormaPagamento::DINHEIRO->value,
            'status' => StatusPagamento::CONFIRMADO->value,
            'registrado_por' => null,
        ];
    }
}
