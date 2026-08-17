<?php

namespace App\Repositories\Estoque;

use App\Models\Ingrediente;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\IngredienteRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class IngredienteRepository extends Repository implements IngredienteRepositoryInterface
{
    public function __construct(Ingrediente $model)
    {
        parent::__construct($model);
    }

    public function listar(?string $busca = null, ?bool $semGrupo = null): Collection
    {
        return $this->query()
            ->with('grupoEquivalencia')
            ->when($busca, fn ($query) => $query->where('nome', 'like', "%{$busca}%"))
            ->when($semGrupo, fn ($query) => $query->whereNull('grupo_equivalencia_id'))
            ->orderBy('nome')
            ->get();
    }

    public function countSemGrupo(): int
    {
        return $this->query()->whereNull('grupo_equivalencia_id')->count();
    }

    public function countReceitasVinculadas(int $ingredienteId): int
    {
        return $this->model->findOrFail($ingredienteId)
            ->receitas()
            ->count();
    }
}
