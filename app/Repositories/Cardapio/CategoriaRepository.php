<?php

namespace App\Repositories\Cardapio;

use App\Models\Categoria;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\CategoriaRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CategoriaRepository extends Repository implements CategoriaRepositoryInterface
{
    public function __construct(Categoria $model)
    {
        parent::__construct($model);
    }

    public function listar(?string $busca = null, ?bool $ativo = null): Collection
    {
        return $this->query()
            ->when($busca, fn ($query) => $query->where('nome', 'like', "%{$busca}%"))
            ->when($ativo !== null, fn ($query) => $query->where('ativo', $ativo))
            ->orderBy('nome')
            ->get();
    }
}
