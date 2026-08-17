<?php

namespace App\Repositories\Contracts;

use App\Models\PrecoProduto;
use Illuminate\Database\Eloquent\Collection;

interface ProdutoRepositoryInterface extends RepositoryInterface
{
    public function listar(?string $busca = null, ?int $categoriaId = null, ?bool $ativo = null): Collection;

    public function countPorCategoria(int $categoriaId): int;

    public function registrarPreco(int $produtoId, float $preco, ?int $createdBy): PrecoProduto;
}
