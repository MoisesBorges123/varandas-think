<?php

namespace App\Repositories\Cardapio;

use App\Models\AvaliacaoProduto;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\AvaliacaoProdutoRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class AvaliacaoProdutoRepository extends Repository implements AvaliacaoProdutoRepositoryInterface
{
    public function __construct(AvaliacaoProduto $model)
    {
        parent::__construct($model);
    }

    public function listarPorProduto(int $produtoId): Collection
    {
        return $this->query()
            ->where('produto_id', $produtoId)
            ->with('itemPedido')
            ->orderByDesc('created_at')
            ->get();
    }

    /**
     * Média calculada sob demanda, nunca cacheada em coluna — mesmo
     * princípio de "estoque nunca é saldo fixo" (CLAUDE.md seção 3)
     * aplicado à avaliação de produto.
     */
    public function mediaEQuantidade(int $produtoId): array
    {
        $sql = <<<SQL
            SELECT
                COALESCE(AVG(nota), 0) AS media,
                COUNT(*) AS quantidade
            FROM avaliacoes_produto
            WHERE produto_id = :PRODUTO_ID
        SQL;

        $resultado = $this->executeFetchAssoc($sql, [
            ':PRODUTO_ID' => $produtoId,
        ])->first();

        return [
            'media' => (float) ($resultado['media'] ?? 0),
            'quantidade' => (int) ($resultado['quantidade'] ?? 0),
        ];
    }

    public function mediaEQuantidadePorProdutos(array $produtoIds): array
    {
        if ($produtoIds === []) {
            return [];
        }

        $placeholders = [];
        $params = [];
        foreach (array_values($produtoIds) as $indice => $produtoId) {
            $nome = ":PRODUTO_ID_{$indice}";
            $placeholders[] = $nome;
            $params[$nome] = $produtoId;
        }

        $listaPlaceholders = implode(', ', $placeholders);

        $sql = <<<SQL
            SELECT
                produto_id,
                AVG(nota) AS media,
                COUNT(*) AS quantidade
            FROM avaliacoes_produto
            WHERE produto_id IN ($listaPlaceholders)
            GROUP BY produto_id
        SQL;

        $linhas = $this->executeFetchAssoc($sql, $params);

        $resultado = [];
        foreach ($linhas as $linha) {
            $resultado[(int) $linha['produto_id']] = [
                'media' => (float) $linha['media'],
                'quantidade' => (int) $linha['quantidade'],
            ];
        }

        return $resultado;
    }
}
