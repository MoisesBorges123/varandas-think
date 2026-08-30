<?php

namespace App\Repositories\Cardapio;

use App\Models\ProdutoFoto;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\FotoProdutoRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class FotoProdutoRepository extends Repository implements FotoProdutoRepositoryInterface
{
    public function __construct(ProdutoFoto $model)
    {
        parent::__construct($model);
    }

    public function listarPorProduto(int $produtoId): Collection
    {
        return $this->query()
            ->where('produto_id', $produtoId)
            ->orderBy('ordem')
            ->get();
    }
}
