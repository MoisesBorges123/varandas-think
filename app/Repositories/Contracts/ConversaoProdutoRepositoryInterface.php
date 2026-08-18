<?php

namespace App\Repositories\Contracts;

use App\Models\ConversaoProduto;

interface ConversaoProdutoRepositoryInterface extends RepositoryInterface
{
    public function buscarPorProduto(int $produtoId): ?ConversaoProduto;
}
