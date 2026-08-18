<?php

namespace App\Services;

use App\DTO\Estoque\CompraManualDTO;
use App\Enums\Estoque\FonteCompra;
use App\Enums\Estoque\OrigemMovimentacao;
use App\Models\Compra;
use App\Models\Ingrediente;
use App\Repositories\Contracts\CompraRepositoryInterface;
use App\Repositories\Contracts\GrupoEquivalenciaRepositoryInterface;
use App\Repositories\Contracts\IngredienteRepositoryInterface;
use App\Repositories\Contracts\MovimentacaoEstoqueRepositoryInterface;
use App\Services\Base\ServiceBase;

/**
 * Caminho de entrada de estoque para compras sem nota fiscal (feira,
 * produtor local, mercadinho que não emite nota) — mesma gravação de
 * compra + itens + movimentação + recálculo de custo médio ponderado que
 * ImportacaoNotaFiscalService::confirmar() usa, só que os dados vêm
 * digitados na tela em vez de escaneados/extraídos de um documento.
 */
class CompraManualService extends ServiceBase
{
    public function __construct(
        private readonly IngredienteRepositoryInterface $ingredienteRepository,
        private readonly GrupoEquivalenciaRepositoryInterface $grupoRepository,
        private readonly CompraRepositoryInterface $compraRepository,
        private readonly MovimentacaoEstoqueRepositoryInterface $movimentacaoRepository,
    ) {
    }

    public function registrar(CompraManualDTO $dto): Compra
    {
        $dto->validate();

        return $this->transaction(function () use ($dto) {
            $itensParaGravar = [];
            $gruposParaRecalcular = [];
            $valorTotal = 0.0;

            foreach ($dto->getItens() as $item) {
                /** @var Ingrediente $ingrediente */
                $ingrediente = $this->ingredienteRepository->findOrFail($item['ingrediente_id']);

                if ($ingrediente->grupo_equivalencia_id) {
                    $gruposParaRecalcular[$ingrediente->grupo_equivalencia_id] = true;
                }

                $itensParaGravar[] = [
                    'ingrediente_id' => $ingrediente->id,
                    'codigo_fiscal' => $ingrediente->codigo_fiscal,
                    'descricao_produto' => $ingrediente->nome,
                    'quantidade' => $item['quantidade'],
                    'unidade' => $item['unidade'],
                    'preco_unitario' => $item['valor_total_item'] / $item['quantidade'],
                    'valor_total_item' => $item['valor_total_item'],
                ];

                $valorTotal += $item['valor_total_item'];
            }

            $compra = $this->compraRepository->criarComItens([
                'fornecedor_id' => $dto->getFornecedorId(),
                'chave_acesso_nf' => null,
                'fonte' => FonteCompra::MANUAL->value,
                'data_compra' => $dto->getDataCompra(),
                'valor_produtos' => $valorTotal,
                'valor_total' => $valorTotal,
                'created_by' => $dto->getCreatedBy(),
            ], $itensParaGravar);

            foreach ($itensParaGravar as $item) {
                $this->movimentacaoRepository->registrarEntrada(
                    $item['ingrediente_id'],
                    (float) $item['quantidade'],
                    OrigemMovimentacao::COMPRA->value,
                    $compra->id,
                    $dto->getCreatedBy(),
                );
            }

            foreach (array_keys($gruposParaRecalcular) as $grupoId) {
                $this->grupoRepository->recalcularCustoMedioPonderado($grupoId);
            }

            return $compra;
        });
    }
}
