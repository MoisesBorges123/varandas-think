<?php

namespace App\Repositories\Estoque;

use App\Models\ConversaoProduto;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\ConversaoProdutoRepositoryInterface;

class ConversaoProdutoRepository extends Repository implements ConversaoProdutoRepositoryInterface
{
    public function __construct(ConversaoProduto $model)
    {
        parent::__construct($model);
    }

    public function buscarPorProduto(int $produtoId): ?ConversaoProduto
    {
        return $this->query()
            ->with('grupoEquivalencia')
            ->where('produto_id', $produtoId)
            ->first();
    }
}
