<?php

namespace App\Repositories\Estoque;

use App\Models\GrupoEquivalencia;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\GrupoEquivalenciaRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class GrupoEquivalenciaRepository extends Repository implements GrupoEquivalenciaRepositoryInterface
{
    public function __construct(GrupoEquivalencia $model)
    {
        parent::__construct($model);
    }

    public function listar(?string $busca = null): Collection
    {
        return $this->query()
            ->when($busca, fn ($query) => $query->where('nome', 'like', "%{$busca}%"))
            ->orderBy('nome')
            ->get();
    }

    public function countIngredientesVinculados(int $grupoId): int
    {
        return $this->model->findOrFail($grupoId)->ingredientes()->count();
    }
}
