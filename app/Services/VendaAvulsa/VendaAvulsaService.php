<?php

namespace App\Services\VendaAvulsa;

use App\DTO\VendaAvulsa\VenderAvulsoDTO;
use App\Enums\Cardapio\TipoProduto;
use App\Enums\Estoque\OrigemMovimentacao;
use App\Models\ConversaoProduto;
use App\Models\VendaAvulsa;
use App\Repositories\Contracts\MovimentacaoEstoqueRepositoryInterface;
use App\Repositories\Contracts\ProdutoRepositoryInterface;
use App\Repositories\Contracts\VendaAvulsaRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Database\Eloquent\Collection;

/**
 * Venda avulsa de balcão (CLAUDE.md seção 3.2) — carrinho com 1 ou mais
 * produtos e um único pagamento, sem cliente identificado, sem
 * aprovação, e que NUNCA bloqueia por falta de estoque (saldo pode
 * ficar negativo, se normaliza na próxima compra via nota fiscal).
 */
class VendaAvulsaService extends ServiceBase
{
    public function __construct(
        private readonly VendaAvulsaRepositoryInterface $vendaAvulsaRepository,
        private readonly ProdutoRepositoryInterface $produtoRepository,
        private readonly MovimentacaoEstoqueRepositoryInterface $movimentacaoRepository,
    ) {
    }

    public function vender(VenderAvulsoDTO $dto): VendaAvulsa
    {
        $dto->validate();

        return $this->transaction(function () use ($dto) {
            $itensParaGravar = [];
            $conversoesPorProduto = [];
            $valorTotal = 0.0;

            foreach ($dto->getItens() as $itemCarrinho) {
                $produto = $this->produtoRepository->findOrFail($itemCarrinho['produto_id']);

                $this->throwUnless(
                    $produto->podeSerVendido(),
                    sprintf('O produto "%s" não está mais disponível para venda.', $produto->nome),
                );
                $this->throwUnless(
                    $produto->tipo === TipoProduto::AVULSO,
                    sprintf('O produto "%s" não é de venda avulsa.', $produto->nome),
                );

                $conversao = $produto->conversao;
                $this->throwUnless(
                    (bool) $conversao,
                    sprintf('O produto "%s" não tem conversão de unidade cadastrada.', $produto->nome),
                );

                $precoAtual = $produto->precoAtual;
                $this->throwUnless(
                    (bool) $precoAtual,
                    sprintf('O produto "%s" não tem preço definido.', $produto->nome),
                );

                $quantidade = $itemCarrinho['quantidade'];
                $valorItem = $precoAtual->preco * $quantidade;
                $valorTotal += $valorItem;

                $conversoesPorProduto[$produto->id] = $conversao;

                $itensParaGravar[] = [
                    'produto_id' => $produto->id,
                    'quantidade' => $quantidade,
                    'preco_unitario' => $precoAtual->preco,
                    'valor_total_item' => $valorItem,
                ];
            }

            $venda = $this->vendaAvulsaRepository->criarComItens([
                'valor_total' => $valorTotal,
                'forma_pagamento' => $dto->getFormaPagamento(),
                'vendido_por' => $this->userId(),
            ], $itensParaGravar);

            foreach ($venda->itens as $itemGravado) {
                $this->darBaixaEstoque($conversoesPorProduto[$itemGravado->produto_id], $itemGravado->quantidade, $venda->id);
            }

            return $venda;
        });
    }

    public function listarRecentes(int $limite = 10): Collection
    {
        return $this->vendaAvulsaRepository->listarRecentes($limite);
    }

    /**
     * Sem rastreamento fino de lote (CLAUDE.md seção 3.1) — qualquer
     * ingrediente do grupo serve como "sink" do lançamento; o que importa
     * é o saldo do grupo como um todo, não desse ingrediente específico.
     * Nunca bloqueia a venda por falta de estoque (seção 3.2).
     */
    private function darBaixaEstoque(ConversaoProduto $conversao, int $quantidadeVendida, int $vendaId): void
    {
        $ingrediente = $conversao->grupoEquivalencia->ingredientes()->first();

        if (! $ingrediente) {
            return;
        }

        $quantidadeConsumida = ($conversao->quantidade_unidade_compra / $conversao->rende_quantidade_venda) * $quantidadeVendida;

        $this->movimentacaoRepository->registrarSaida(
            $ingrediente->id,
            $quantidadeConsumida,
            OrigemMovimentacao::VENDA_AVULSA->value,
            $vendaId,
            $this->userId(),
        );
    }
}
