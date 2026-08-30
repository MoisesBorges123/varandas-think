<?php

namespace App\Services\Pedido;

use App\Models\Produto;
use App\Repositories\Contracts\ConfiguracaoRepositoryInterface;
use App\Repositories\Contracts\MovimentacaoEstoqueRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Support\Facades\Log;

/**
 * CLAUDE.md seção 2/4.3: validação de estoque no fluxo de pedidos, gated
 * por DOIS toggles independentes que precisam estar ambos ligados — o
 * geral do sistema e o do produto específico.
 */
class ValidacaoEstoquePedidoService extends ServiceBase
{
    public function __construct(
        private readonly ConfiguracaoRepositoryInterface $configuracaoRepository,
        private readonly MovimentacaoEstoqueRepositoryInterface $movimentacaoRepository,
    ) {
    }

    public function estaAtiva(Produto $produto): bool
    {
        $config = $this->configuracaoRepository->obter();

        return (bool) ($config?->validacao_estoque_automatica_ativa) && $produto->valida_estoque_automatico;
    }

    public function possuiEstoqueSuficiente(Produto $produto, int $quantidade): bool
    {
        $receita = $produto->receita;

        if (! $receita) {
            // Produto marcado pra validar estoque mas sem ficha técnica
            // cadastrada — gap de cadastro, não falha de negócio. Não
            // faz sentido bloquear venda por falta desse dado.
            Log::warning('Produto com valida_estoque_automatico ligado mas sem receita cadastrada.', [
                'produto_id' => $produto->id,
            ]);

            return true;
        }

        foreach ($receita->ingredientes as $ingrediente) {
            $necessario = $ingrediente->pivot->quantidade * $quantidade;

            if ($this->movimentacaoRepository->saldoPorIngrediente($ingrediente->id) < $necessario) {
                return false;
            }
        }

        return true;
    }
}
