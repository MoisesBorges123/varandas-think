<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface CategoriaRepositoryInterface extends RepositoryInterface
{
    public function listar(?string $busca = null, ?bool $ativo = null): Collection;
}
