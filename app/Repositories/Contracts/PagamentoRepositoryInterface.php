<?php

namespace App\Repositories\Contracts;

use App\Models\Pagamento;
use Illuminate\Database\Eloquent\Collection;

interface PagamentoRepositoryInterface extends RepositoryInterface
{
    public function listarPorComanda(int $comandaId): Collection;

    public function buscarPorMpId(string $mpId): ?Pagamento;

    /**
     * @param  array<int, int>  $itemPedidoIds
     */
    public function criarComItens(array $dadosPagamento, array $itemPedidoIds): Pagamento;
}
