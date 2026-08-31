<?php

namespace App\Repositories\Pedido;

use App\Enums\Pedido\StatusItemPedido;
use App\Models\ItemPedido;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\ItemPedidoRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ItemPedidoRepository extends Repository implements ItemPedidoRepositoryInterface
{
    public function __construct(ItemPedido $model)
    {
        parent::__construct($model);
    }

    private function comRelacoesPadrao()
    {
        return $this->query()->with(['comanda.mesa', 'comanda.garcom', 'produto', 'precoProduto', 'lancadoPor', 'aprovadoPor']);
    }

    public function encontrarComRelacoes(int $id): ItemPedido
    {
        return $this->comRelacoesPadrao()->findOrFail($id);
    }

    public function listarPorComanda(int $comandaId): Collection
    {
        return $this->comRelacoesPadrao()
            ->where('comanda_id', $comandaId)
            ->orderBy('hora_pedido')
            ->get();
    }

    public function listarFilaAprovacao(?int $garcomId, bool $verTudo): Collection
    {
        return $this->comRelacoesPadrao()
            ->where('status', StatusItemPedido::PENDENTE_APROVACAO->value)
            ->when(! $verTudo, function ($query) use ($garcomId) {
                $query->whereHas('comanda', function ($q) use ($garcomId) {
                    $q->whereNull('garcom_id')->orWhere('garcom_id', $garcomId);
                });
            })
            ->orderBy('hora_pedido')
            ->get();
    }

    public function listarParaCozinha(): Collection
    {
        return $this->comRelacoesPadrao()
            ->where('status', StatusItemPedido::ENVIADO_COZINHA->value)
            ->whereHas('produto.categoria', fn ($q) => $q->where('destino_impressao', 'cozinha'))
            ->orderBy('hora_pedido')
            ->get();
    }

    public function listarParaBalcao(array $filtros): Collection
    {
        $statusPainel = [
            StatusItemPedido::PENDENTE_APROVACAO->value,
            StatusItemPedido::ENVIADO_COZINHA->value,
            StatusItemPedido::PRONTO->value,
            StatusItemPedido::LIBERADO_BALCAO->value,
        ];

        return $this->comRelacoesPadrao()
            ->when(
                $filtros['status'] ?? null,
                fn ($query, $status) => $query->where('status', $status),
                fn ($query) => $query->whereIn('status', $statusPainel),
            )
            ->orderBy('hora_pedido')
            ->get();
    }

    public function atualizarSeStatusFor(int $id, string $statusEsperado, array $dados): int
    {
        return ItemPedido::query()
            ->where('id', $id)
            ->where('status', $statusEsperado)
            ->update($dados);
    }
}
