<?php

namespace App\Repositories\Contracts;

use App\Models\Compra;
use Illuminate\Database\Eloquent\Collection;

interface CompraRepositoryInterface extends RepositoryInterface
{
    public function existeChaveAcesso(string $chaveAcesso): bool;

    public function criarComItens(array $dadosCompra, array $itens): Compra;

    /**
     * @param  array{data_de?: ?string, data_ate?: ?string, fornecedor_id?: ?int, categoria_compra_id?: ?string}  $filtros
     */
    public function listar(array $filtros): Collection;

    public function atualizarCategoria(int $compraId, ?int $categoriaCompraId): void;

    /**
     * Traz a compra com itens+ingrediente carregados, mesmo se já
     * excluída (soft delete) — usado pelo fluxo de exclusão, que precisa
     * ler os itens originais para lançar o estorno.
     */
    public function encontrarComItens(int $compraId): Compra;
}
