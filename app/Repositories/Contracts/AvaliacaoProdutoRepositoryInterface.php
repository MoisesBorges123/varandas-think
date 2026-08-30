<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface AvaliacaoProdutoRepositoryInterface extends RepositoryInterface
{
    public function listarPorProduto(int $produtoId): Collection;

    /**
     * @return array{media: float, quantidade: int}
     */
    public function mediaEQuantidade(int $produtoId): array;

    /**
     * Versão em lote de mediaEQuantidade() — uma única query agregada
     * pros cards do catálogo, em vez de N queries (uma por produto).
     *
     * @param  array<int, int>  $produtoIds
     * @return array<int, array{media: float, quantidade: int}>
     */
    public function mediaEQuantidadePorProdutos(array $produtoIds): array;
}
