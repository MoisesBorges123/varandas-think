<?php

namespace App\Repositories\Contracts;

use App\Models\Receita;

interface ReceitaRepositoryInterface extends RepositoryInterface
{
    public function buscarPorProduto(int $produtoId): ?Receita;

    public function substituirItens(Receita $receita, array $itens): void;
}
