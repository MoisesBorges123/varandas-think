<?php

namespace App\Repositories\NotaFiscal;

use App\Enums\Estoque\TipoMovimentacao;
use App\Models\MovimentacaoEstoque;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\MovimentacaoEstoqueRepositoryInterface;

class MovimentacaoEstoqueRepository extends Repository implements MovimentacaoEstoqueRepositoryInterface
{
    public function __construct(MovimentacaoEstoque $model)
    {
        parent::__construct($model);
    }

    public function registrarEntrada(int $ingredienteId, float $quantidade, string $origemTipo, ?int $origemId, ?int $createdBy): MovimentacaoEstoque
    {
        return $this->create([
            'ingrediente_id' => $ingredienteId,
            'tipo' => TipoMovimentacao::ENTRADA->value,
            'quantidade' => $quantidade,
            'origem_tipo' => $origemTipo,
            'origem_id' => $origemId,
            'created_by' => $createdBy,
        ]);
    }

    public function registrarSaida(int $ingredienteId, float $quantidade, string $origemTipo, ?int $origemId, ?int $createdBy): MovimentacaoEstoque
    {
        return $this->create([
            'ingrediente_id' => $ingredienteId,
            'tipo' => TipoMovimentacao::SAIDA->value,
            'quantidade' => $quantidade,
            'origem_tipo' => $origemTipo,
            'origem_id' => $origemId,
            'created_by' => $createdBy,
        ]);
    }

    /**
     * Saldo calculado a partir do ledger — nunca uma coluna de saldo fixo
     * (CLAUDE.md, seção 3). Agregação simples de soma condicional: SQL raw
     * é mais direto aqui do que forçar no Eloquent (mesmo critério usado
     * em EstoqueRepository.php.example da skill de arquitetura).
     */
    public function saldoPorIngrediente(int $ingredienteId): float
    {
        $sql = <<<SQL
            SELECT
                COALESCE(SUM(
                    CASE WHEN tipo = 'entrada' THEN quantidade ELSE -quantidade END
                ), 0) AS saldo
            FROM movimentacoes_estoque
            WHERE ingrediente_id = :INGREDIENTE_ID
        SQL;

        $resultado = $this->executeFetchAssoc($sql, [
            ':INGREDIENTE_ID' => $ingredienteId,
        ])->first();

        return (float) ($resultado['saldo'] ?? 0);
    }
}
