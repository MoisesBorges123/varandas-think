<?php

namespace App\Repositories\Estoque;

use App\Models\GrupoEquivalencia;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\GrupoEquivalenciaRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class GrupoEquivalenciaRepository extends Repository implements GrupoEquivalenciaRepositoryInterface
{
    public function __construct(GrupoEquivalencia $model)
    {
        parent::__construct($model);
    }

    public function listar(?string $busca = null): Collection
    {
        return $this->query()
            ->when($busca, fn ($query) => $query->where('nome', 'like', "%{$busca}%"))
            ->orderBy('nome')
            ->get();
    }

    public function countIngredientesVinculados(int $grupoId): int
    {
        return $this->model->findOrFail($grupoId)->ingredientes()->count();
    }

    /**
     * Custo médio ponderado pela quantidade de cada compra (CLAUDE.md,
     * seção 3.1), recalculado a cada nova entrada de estoque do grupo.
     * Agregação com JOIN + divisão ponderada: SQL raw é mais direto que
     * forçar no Eloquent (mesmo critério de EstoqueRepository.php.example).
     */
    public function recalcularCustoMedioPonderado(int $grupoId): void
    {
        // JOIN com compras filtrando deleted_at IS NULL: compra excluída
        // (estornada) não pode continuar pesando no custo médio — o estorno
        // já compensa o ledger de movimentacoes_estoque, mas o item da
        // compra em si continua gravado no banco pra auditoria (soft
        // delete), então precisa ser explicitamente excluído deste cálculo.
        // COALESCE(..., 0): se a compra excluída era a única com itens
        // desse grupo, a subquery não acha nenhuma linha e o cálculo daria
        // NULL — mas a coluna é NOT NULL (mesmo default de um grupo recém
        // criado, sem nenhuma compra ainda), então volta pra 0 em vez de
        // violar a constraint.
        $sql = <<<SQL
            UPDATE grupos_equivalencia
            SET custo_medio_ponderado = COALESCE((
                SELECT
                    SUM(itens_compra.preco_unitario * itens_compra.quantidade)
                    / NULLIF(SUM(itens_compra.quantidade), 0)
                FROM itens_compra
                JOIN ingredientes
                    ON ingredientes.id = itens_compra.ingrediente_id
                JOIN compras
                    ON compras.id = itens_compra.compra_id
                    AND compras.deleted_at IS NULL
                WHERE ingredientes.grupo_equivalencia_id = :GRUPO_ID_CALC
            ), 0)
            WHERE grupos_equivalencia.id = :GRUPO_ID
        SQL;

        $this->executeUpdate($sql, [
            ':GRUPO_ID_CALC' => $grupoId,
            ':GRUPO_ID' => $grupoId,
        ]);
    }
}
