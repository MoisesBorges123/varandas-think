<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface CategoriaCompraRepositoryInterface extends RepositoryInterface
{
    public function listar(): Collection;
}
