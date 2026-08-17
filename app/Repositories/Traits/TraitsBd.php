<?php

namespace App\Repositories\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection as SupportCollection;
use PDO;
use PDOException;

/**
 * Acesso a banco via PDO puro, para os casos em que SQL raw é mais direto
 * ou mais performático do que o Eloquent Query Builder — típico dos
 * cálculos agregados do Varandas (ex.: saldo de estoque como
 * SUM(entrada) - SUM(saída) sobre `movimentacoes_estoque`, custo médio
 * ponderado sobre `grupos_equivalencia`, extratos de comanda com múltiplos
 * JOINs).
 *
 * Regra de uso: prefira o Eloquent Query Builder (via
 * App\Repositories\Base\Repository::query()) para CRUD simples e
 * relacionamentos diretos. Recorra a esta trait quando a query envolver
 * agregação pesada, múltiplos JOINs, ou precisar de controle fino sobre a
 * consulta que o Eloquent tornaria verboso ou lento.
 *
 * Convenção do projeto: não usar aliases de tabela nas queries SQL raw
 * escritas aqui — nomes de tabela/coluna por extenso, para manter a
 * legibilidade (ver CLAUDE.md e diagrama ER para os nomes oficiais).
 */
trait TraitsBd
{
    /**
     * Conexão usada pelos métodos desta trait. `null` = conexão padrão do
     * Laravel (mysql em dev/produção, sqlite em testes) — só defina um nome
     * fixo aqui se o Repository concreto precisar de uma conexão nomeada
     * diferente (um valor fixo tipo 'mysql' quebra os testes em sqlite).
     */
    protected ?string $connection = null;

    public function db()
    {
        return DB::connection($this->connection);
    }

    /**
     * Executa um INSERT e retorna o ID inserido.
     */
    public function executeInsert(string $sql, array $params = []): int
    {
        $pdo = $this->db()->getPdo();
        $sth = $pdo->prepare($sql);
        $sth->execute($params);

        return (int) $pdo->lastInsertId();
    }

    /**
     * Executa um UPDATE. Se a query tiver uma cláusula OUTPUT/RETURNING
     * (ou equivalente), retorna as linhas atualizadas; caso contrário,
     * retorna a contagem de linhas afetadas em 'rowsAffected'.
     */
    public function executeUpdate(string $sql, array $params = []): SupportCollection
    {
        $pdo = $this->db()->getPdo();
        $sth = $pdo->prepare($sql);
        $sth->execute($params);
        $sth->setFetchMode(PDO::FETCH_ASSOC);

        $updatedRows = collect($sth->fetchAll());
        if ($updatedRows->isNotEmpty()) {
            return $updatedRows;
        }

        return collect(['rowsAffected' => $sth->rowCount()]);
    }

    /**
     * Executa uma consulta SELECT e retorna o resultado como Collection
     * (fetch mode ASSOC). Uso típico: saldo de estoque agregado, extrato
     * de comanda, relatórios de comparação de preço entre fornecedores.
     *
     * @throws PDOException
     */
    public function executeFetchAssoc(string $sql, array $params = []): SupportCollection
    {
        $sth = $this->db()->getPdo()->prepare($sql);
        $sth->execute($params);
        $sth->setFetchMode(PDO::FETCH_ASSOC);

        return collect($sth->fetchAll());
    }

    /**
     * Executa um DELETE e retorna true caso algum registro tenha sido
     * excluído.
     *
     * @throws \Throwable
     */
    public function executeDelete(string $sql, array $params = []): bool
    {
        $pdo = $this->db()->getPdo();
        $sth = $pdo->prepare($sql);
        $sth->execute($params);

        return $sth->rowCount() > 0;
    }
}
