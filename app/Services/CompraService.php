<?php

namespace App\Services;

use App\Enums\Estoque\OrigemMovimentacao;
use App\Models\Compra;
use App\Repositories\Contracts\CompraRepositoryInterface;
use App\Repositories\Contracts\GrupoEquivalenciaRepositoryInterface;
use App\Repositories\Contracts\MovimentacaoEstoqueRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Database\Eloquent\Collection;

class CompraService extends ServiceBase
{
    public function __construct(
        private readonly CompraRepositoryInterface $compraRepository,
        private readonly MovimentacaoEstoqueRepositoryInterface $movimentacaoRepository,
        private readonly GrupoEquivalenciaRepositoryInterface $grupoRepository,
    ) {
    }

    /**
     * @param  array{data_de?: ?string, data_ate?: ?string, fornecedor_id?: ?int, categoria_compra_id?: ?string}  $filtros
     */
    public function listar(array $filtros): Collection
    {
        return $this->compraRepository->listar($filtros);
    }

    public function atualizarCategoria(int $compraId, ?int $categoriaCompraId): void
    {
        $this->compraRepository->atualizarCategoria($compraId, $categoriaCompraId);
    }

    public function encontrarComItens(int $compraId): Compra
    {
        return $this->compraRepository->encontrarComItens($compraId);
    }

    /**
     * Exclui uma compra (qualquer origem — nota fiscal ou manual) com
     * estorno automático do estoque, decisão alinhada com o usuário: a
     * compra e os itens continuam no banco (soft delete, preserva o
     * "espelho" da compra pra auditoria — CLAUDE.md seção 7), e é lançada
     * uma saída de estoque compensando a mesma quantidade que cada item
     * tinha dado entrada. O ledger de movimentacoes_estoque nunca é
     * apagado/alterado retroativamente (CLAUDE.md seção 3), só compensado.
     */
    public function excluir(int $compraId): void
    {
        $compra = $this->compraRepository->encontrarComItens($compraId);

        $this->throwIf($compra->trashed(), 'Esta compra já foi excluída.');

        $this->transaction(function () use ($compra) {
            $gruposParaRecalcular = [];

            foreach ($compra->itens as $item) {
                $this->movimentacaoRepository->registrarSaida(
                    $item->ingrediente_id,
                    (float) $item->quantidade,
                    OrigemMovimentacao::ESTORNO_COMPRA->value,
                    $compra->id,
                    $this->userId(),
                );

                if ($item->ingrediente?->grupo_equivalencia_id) {
                    $gruposParaRecalcular[$item->ingrediente->grupo_equivalencia_id] = true;
                }
            }

            $this->compraRepository->delete($compra->id);

            foreach (array_keys($gruposParaRecalcular) as $grupoId) {
                $this->grupoRepository->recalcularCustoMedioPonderado($grupoId);
            }
        });
    }
}
