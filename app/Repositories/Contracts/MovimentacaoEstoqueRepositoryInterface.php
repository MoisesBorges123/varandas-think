<?php

namespace App\Repositories\Contracts;

use App\Models\MovimentacaoEstoque;

interface MovimentacaoEstoqueRepositoryInterface extends RepositoryInterface
{
    public function registrarEntrada(int $ingredienteId, float $quantidade, string $origemTipo, ?int $origemId, ?int $createdBy): MovimentacaoEstoque;

    public function registrarSaida(int $ingredienteId, float $quantidade, string $origemTipo, ?int $origemId, ?int $createdBy): MovimentacaoEstoque;

    public function saldoPorIngrediente(int $ingredienteId): float;
}
