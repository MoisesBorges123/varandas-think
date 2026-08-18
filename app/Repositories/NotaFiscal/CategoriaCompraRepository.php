<?php

namespace App\Repositories\NotaFiscal;

use App\Models\CategoriaCompra;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\CategoriaCompraRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CategoriaCompraRepository extends Repository implements CategoriaCompraRepositoryInterface
{
    public function __construct(CategoriaCompra $model)
    {
        parent::__construct($model);
    }

    public function listar(): Collection
    {
        return $this->query()->orderBy('nome')->get();
    }
}
