<?php

namespace App\Repositories\Contracts;

use App\Models\Ingrediente;
use Illuminate\Database\Eloquent\Collection;

interface IngredienteRepositoryInterface extends RepositoryInterface
{
    public function listar(?string $busca = null, ?bool $semGrupo = null): Collection;

    public function countSemGrupo(): int;

    public function countReceitasVinculadas(int $ingredienteId): int;

    public function encontrarPorCodigoFiscal(string $codigoFiscal): ?Ingrediente;
}
