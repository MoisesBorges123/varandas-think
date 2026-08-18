<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface GrupoEquivalenciaRepositoryInterface extends RepositoryInterface
{
    public function listar(?string $busca = null): Collection;

    public function countIngredientesVinculados(int $grupoId): int;

    public function recalcularCustoMedioPonderado(int $grupoId): void;
}
