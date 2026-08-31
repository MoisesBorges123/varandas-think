<?php

namespace App\Repositories\Pagamento;

use App\Models\Pagamento;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\PagamentoRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class PagamentoRepository extends Repository implements PagamentoRepositoryInterface
{
    public function __construct(Pagamento $model)
    {
        parent::__construct($model);
    }

    public function listarPorComanda(int $comandaId): Collection
    {
        return $this->query()
            ->with('itens', 'registradoPor')
            ->where('comanda_id', $comandaId)
            ->orderByDesc('created_at')
            ->get();
    }

    public function buscarPorMpId(string $mpId): ?Pagamento
    {
        return $this->query()->where('mp_payment_id', $mpId)->first();
    }

    public function criarComItens(array $dadosPagamento, array $itemPedidoIds): Pagamento
    {
        $pagamento = $this->create($dadosPagamento);

        foreach ($itemPedidoIds as $itemPedidoId) {
            $pagamento->itens()->create(['item_pedido_id' => $itemPedidoId]);
        }

        return $pagamento->load('itens');
    }
}
