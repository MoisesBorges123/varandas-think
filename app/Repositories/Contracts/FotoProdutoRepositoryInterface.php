<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface FotoProdutoRepositoryInterface extends RepositoryInterface
{
    public function listarPorProduto(int $produtoId): Collection;
}
