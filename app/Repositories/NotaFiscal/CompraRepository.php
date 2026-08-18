<?php

namespace App\Repositories\NotaFiscal;

use App\Models\Compra;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\CompraRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CompraRepository extends Repository implements CompraRepositoryInterface
{
    public function __construct(Compra $model)
    {
        parent::__construct($model);
    }

    public function existeChaveAcesso(string $chaveAcesso): bool
    {
        return $this->query()->where('chave_acesso_nf', $chaveAcesso)->exists();
    }

    /**
     * @param  array<int, array<string, mixed>>  $itens  já com ingrediente_id resolvido
     */
    public function criarComItens(array $dadosCompra, array $itens): Compra
    {
        $compra = $this->create($dadosCompra);

        foreach ($itens as $item) {
            $compra->itens()->create($item);
        }

        return $compra->load('itens');
    }

    /**
     * Traz também as compras excluídas (soft delete) — elas continuam
     * aparecendo na listagem marcadas como "Excluída", só o efeito no
     * estoque é que já foi estornado (CLAUDE.md/decisão de exclusão com
     * estorno automático).
     */
    public function listar(array $filtros): Collection
    {
        return $this->model->withTrashed()
            ->with(['fornecedor', 'categoriaCompra', 'itens.ingrediente'])
            ->when($filtros['data_de'] ?? null, fn ($q, $data) => $q->whereDate('data_compra', '>=', $data))
            ->when($filtros['data_ate'] ?? null, fn ($q, $data) => $q->whereDate('data_compra', '<=', $data))
            ->when($filtros['fornecedor_id'] ?? null, fn ($q, $id) => $q->where('fornecedor_id', $id))
            ->when(
                ($filtros['categoria_compra_id'] ?? null) === 'sem_categoria',
                fn ($q) => $q->whereNull('categoria_compra_id'),
            )
            ->when(
                filled($filtros['categoria_compra_id'] ?? null) && $filtros['categoria_compra_id'] !== 'sem_categoria',
                fn ($q) => $q->where('categoria_compra_id', $filtros['categoria_compra_id']),
            )
            ->orderByDesc('data_compra')
            ->orderByDesc('id')
            ->get();
    }

    public function atualizarCategoria(int $compraId, ?int $categoriaCompraId): void
    {
        $this->findOrFail($compraId)->update(['categoria_compra_id' => $categoriaCompraId]);
    }

    public function encontrarComItens(int $compraId): Compra
    {
        return $this->model->withTrashed()
            ->with(['itens.ingrediente', 'fornecedor', 'categoriaCompra'])
            ->findOrFail($compraId);
    }
}
