<?php

namespace App\Services\Pedido;

use App\DTO\Pedido\AdicionarItemPedidoDTO;
use App\Enums\Estoque\OrigemMovimentacao;
use App\Enums\Notificacao\TipoNotificacao;
use App\Enums\Pedido\OrigemItemPedido;
use App\Enums\Pedido\StatusItemPedido;
use App\Enums\Usuario\PerfilNome;
use App\Exceptions\EstoqueProvavelmenteIndisponivelException;
use App\Models\ItemPedido;
use App\Models\Usuario;
use App\Repositories\Contracts\ConfiguracaoRepositoryInterface;
use App\Repositories\Contracts\ItemPedidoRepositoryInterface;
use App\Repositories\Contracts\MovimentacaoEstoqueRepositoryInterface;
use App\Repositories\Contracts\ProdutoRepositoryInterface;
use App\Services\Base\ServiceBase;
use App\Services\NotificacaoService;
use Illuminate\Database\Eloquent\Collection;

/**
 * Orquestrador central do ciclo de vida de um item de pedido — CLAUDE.md
 * seções 4.2, 4.3, 5, 5.1, 8 e 10. Um único Service pro ciclo inteiro
 * (lançar, aprovar/rejeitar, cozinha/balcão, cancelar/excluir): todas as
 * etapas compartilham o mesmo repositório, o mesmo helper de trava
 * otimista e a mesma matriz de permissão — separar em vários Services
 * geraria acoplamento cruzado só por estética.
 */
class ItemPedidoService extends ServiceBase
{
    public function __construct(
        private readonly ItemPedidoRepositoryInterface $itemPedidoRepository,
        private readonly ProdutoRepositoryInterface $produtoRepository,
        private readonly MovimentacaoEstoqueRepositoryInterface $movimentacaoRepository,
        private readonly ConfiguracaoRepositoryInterface $configuracaoRepository,
        private readonly ValidacaoEstoquePedidoService $validacaoEstoque,
        private readonly NotificacaoService $notificacaoService,
    ) {
    }

    public function listarPorComanda(int $comandaId): Collection
    {
        return $this->itemPedidoRepository->listarPorComanda($comandaId);
    }

    public function listarFilaAprovacao(?int $garcomId, bool $verTudo): Collection
    {
        return $this->itemPedidoRepository->listarFilaAprovacao($garcomId, $verTudo);
    }

    public function listarParaCozinha(): Collection
    {
        return $this->itemPedidoRepository->listarParaCozinha();
    }

    public function listarParaBalcao(array $filtros): Collection
    {
        return $this->itemPedidoRepository->listarParaBalcao($filtros);
    }

    /**
     * Garçom lança direto do painel — vai direto pra cozinha, sem fila
     * de aprovação (CLAUDE.md seção 4.2).
     */
    public function lancarPeloGarcom(AdicionarItemPedidoDTO $dto): ItemPedido
    {
        $dto->validate();
        $dto->setLancadoPor($this->userId());

        return $this->transaction(function () use ($dto) {
            $produto = $this->produtoRepository->findOrFail($dto->getProdutoId());
            $this->throwUnless($produto->podeSerVendido(), 'Este produto não está disponível para venda.');

            // Único checkpoint aqui — não existe "momento do pedido"
            // separado de "aprovação" nesse caminho, então se faltar
            // estoque o garçom vê o erro e ajusta na hora.
            if ($this->validacaoEstoque->estaAtiva($produto)) {
                $this->throwUnless(
                    $this->validacaoEstoque->possuiEstoqueSuficiente($produto, $dto->getQuantidade()),
                    'Estoque insuficiente para este produto.',
                );
            }

            $item = $this->itemPedidoRepository->create($dto->toArray() + [
                'preco_produto_id' => $produto->precoAtual->id,
                'origem' => OrigemItemPedido::GARCOM->value,
                'status' => StatusItemPedido::ENVIADO_COZINHA->value,
                'hora_pedido' => $this->now(),
            ]);

            $this->darBaixaEstoquePorItem($item);

            return $item;
        });
    }

    /**
     * Cliente pede pelo celular — cai na fila de aprovação (CLAUDE.md
     * seção 4.2). $confirmarComAviso permite ao cliente confirmar mesmo
     * depois de avisado que o estoque pode estar curto.
     */
    public function pedirPeloCliente(AdicionarItemPedidoDTO $dto, bool $confirmarComAviso = false): ItemPedido
    {
        $dto->validate();

        return $this->transaction(function () use ($dto, $confirmarComAviso) {
            $produto = $this->produtoRepository->findOrFail($dto->getProdutoId());
            $this->throwUnless($produto->podeSerVendido(), 'Este produto não está disponível no momento.');

            if (
                $this->validacaoEstoque->estaAtiva($produto)
                && ! $confirmarComAviso
                && ! $this->validacaoEstoque->possuiEstoqueSuficiente($produto, $dto->getQuantidade())
            ) {
                throw new EstoqueProvavelmenteIndisponivelException();
            }

            // Sem baixa aqui — é só aviso prévio, a checagem que vale é
            // a da aprovação (CLAUDE.md seção 4.3).
            return $this->itemPedidoRepository->create($dto->toArray() + [
                'preco_produto_id' => $produto->precoAtual->id,
                'origem' => OrigemItemPedido::CLIENTE_APP->value,
                'status' => StatusItemPedido::PENDENTE_APROVACAO->value,
                'hora_pedido' => $this->now(),
            ]);
        });
    }

    /**
     * Aprovação com trava otimista (CLAUDE.md seção 4.2) — se dois
     * garçons aprovarem ao mesmo tempo, só um vence; o outro recebe uma
     * mensagem amigável em vez de um erro técnico. Recheck obrigatório
     * de estoque na aprovação (seção 4.3): se falhar, vira
     * indisponivel_estoque sem lançar exceção — é resultado esperado,
     * não erro, o garçom fica livre pra ir repor.
     */
    public function aprovar(int $itemId, int $usuarioId): ItemPedido
    {
        $item = $this->itemPedidoRepository->encontrarComRelacoes($itemId);
        $usuario = Usuario::findOrFail($usuarioId);

        $this->autorizarResolucao($item, $usuario);

        return $this->transaction(function () use ($item, $usuario) {
            $afetadas = $this->itemPedidoRepository->atualizarSeStatusFor(
                $item->id,
                StatusItemPedido::PENDENTE_APROVACAO->value,
                [
                    'status' => StatusItemPedido::APROVADO->value,
                    'aprovado_por' => $usuario->id,
                    'hora_aprovacao' => $this->now(),
                ],
            );

            $this->throwIf($afetadas === 0, 'Este pedido já foi resolvido por outro colega.');

            $produto = $item->produto;

            if ($this->validacaoEstoque->estaAtiva($produto) && ! $this->validacaoEstoque->possuiEstoqueSuficiente($produto, $item->quantidade)) {
                $this->itemPedidoRepository->update($item->id, ['status' => StatusItemPedido::INDISPONIVEL_ESTOQUE->value]);

                return $item->fresh();
            }

            $this->itemPedidoRepository->update($item->id, ['status' => StatusItemPedido::ENVIADO_COZINHA->value]);
            $this->darBaixaEstoquePorItem($item);

            return $item->fresh();
        });
    }

    public function rejeitar(int $itemId, int $usuarioId): void
    {
        $item = $this->itemPedidoRepository->encontrarComRelacoes($itemId);
        $usuario = Usuario::findOrFail($usuarioId);

        $this->autorizarResolucao($item, $usuario);

        $afetadas = $this->itemPedidoRepository->atualizarSeStatusFor(
            $itemId,
            StatusItemPedido::PENDENTE_APROVACAO->value,
            ['status' => StatusItemPedido::REJEITADO->value],
        );

        $this->throwIf($afetadas === 0, 'Este pedido já foi resolvido por outro colega.');
    }

    /**
     * Cozinha marca pronto — quem é avisado é o balcão, não o garçom
     * direto (CLAUDE.md seção 5).
     */
    public function marcarPronto(int $itemId): void
    {
        $item = $this->itemPedidoRepository->encontrarComRelacoes($itemId);

        $this->itemPedidoRepository->update($itemId, [
            'status' => StatusItemPedido::PRONTO->value,
            'hora_pronto' => $this->now(),
        ]);

        $this->notificacaoService->notificarPerfil(
            PerfilNome::BALCONISTA,
            TipoNotificacao::PEDIDO_PRONTO,
            'Pedido pronto',
            sprintf('Item "%s" está pronto na cozinha.', $item->produto->nome),
            'item_pedido',
            $itemId,
        );
    }

    public function liberarParaGarcom(int $itemId): void
    {
        $this->itemPedidoRepository->update($itemId, [
            'status' => StatusItemPedido::LIBERADO_BALCAO->value,
            'hora_liberado_balcao' => $this->now(),
        ]);
    }

    public function marcarEntregue(int $itemId): void
    {
        $this->itemPedidoRepository->update($itemId, [
            'status' => StatusItemPedido::ENTREGUE->value,
            'hora_entregue' => $this->now(),
        ]);
    }

    /**
     * Mantém a linha (histórico/auditoria), só transiciona o status.
     * Reverte estoque se já tinha sido baixado (item já despachado pra
     * produção).
     */
    public function cancelar(int $itemId, int $usuarioId): void
    {
        $item = $this->itemPedidoRepository->encontrarComRelacoes($itemId);
        $usuario = Usuario::findOrFail($usuarioId);

        $this->validarPermissaoResolucao($item, $usuario, paraExclusao: false);

        $this->transaction(function () use ($item, $usuario) {
            if ($item->jaFoiDespachadoParaProducao()) {
                $this->estornarEstoquePorItem($item);
            }

            $this->itemPedidoRepository->update($item->id, [
                'status' => StatusItemPedido::CANCELADO->value,
                'cancelado_por' => $usuario->id,
            ]);
        });
    }

    /**
     * Soft-delete real, diferente de cancelar() — CLAUDE.md seção 10
     * trata "cancelar" e "excluir" como ações com toggles separados.
     */
    public function excluir(int $itemId, int $usuarioId): void
    {
        $item = $this->itemPedidoRepository->encontrarComRelacoes($itemId);
        $usuario = Usuario::findOrFail($usuarioId);

        $this->validarPermissaoResolucao($item, $usuario, paraExclusao: true);

        $this->transaction(function () use ($item, $usuario) {
            if ($item->jaFoiDespachadoParaProducao()) {
                $this->estornarEstoquePorItem($item);
            }

            $this->itemPedidoRepository->update($item->id, [
                'status' => StatusItemPedido::CANCELADO->value,
                'cancelado_por' => $usuario->id,
            ]);

            $this->itemPedidoRepository->delete($item->id);
        });
    }

    /**
     * Garçom atribuído à mesa decide sozinho; mesa sem garçom, qualquer
     * garçom pode; balcão/admin sempre podem (agem, não só supervisionam
     * — CLAUDE.md seção 4.2/5).
     */
    private function autorizarResolucao(ItemPedido $item, Usuario $usuario): void
    {
        if (in_array($usuario->perfil->nome, [PerfilNome::BALCONISTA, PerfilNome::ADMINISTRADOR], true)) {
            return;
        }

        $garcomDaMesa = $item->comanda->garcom_id;

        $this->throwUnless(
            $garcomDaMesa === null || $garcomDaMesa === $usuario->id,
            'Este pedido é exclusivo do garçom responsável pela mesa.',
        );
    }

    /**
     * Matriz de permissão de cancelamento/exclusão (CLAUDE.md seção 10).
     * A regra fixa "pós-despacho só balcão" tem precedência sobre "item
     * próprio sempre pode" — vale pros dois verbos, mesmo o CLAUDE.md só
     * declarando isso explicitamente pra "cancelar": deixar excluir
     * contornar essa trava seria um buraco de auditoria, não uma
     * diferença de regra intencional.
     */
    private function validarPermissaoResolucao(ItemPedido $item, Usuario $usuario, bool $paraExclusao): void
    {
        if (in_array($usuario->perfil->nome, [PerfilNome::BALCONISTA, PerfilNome::ADMINISTRADOR], true)) {
            return;
        }

        $this->throwIf(
            $item->jaFoiDespachadoParaProducao(),
            'Depois de enviado à produção, só o balcão pode cancelar ou excluir este item.',
        );

        $config = $this->configuracaoRepository->obter();
        $ehAutor = $item->lancado_por === $usuario->id;

        $toggleColega = $paraExclusao
            ? (bool) ($config?->permitir_garcom_excluir_item_colega)
            : (bool) ($config?->permitir_garcom_cancelar_item_colega);

        // Cancelar item próprio nunca é toggle, sempre permitido;
        // excluir item próprio é toggle (default ligado).
        $toggleProprio = $paraExclusao ? (bool) ($config?->permitir_garcom_excluir_proprio_item) : true;

        $this->throwUnless(
            $ehAutor ? $toggleProprio : $toggleColega,
            'Você não tem permissão para esta ação neste item.',
        );
    }

    /**
     * A baixa real de estoque acontece exatamente na entrada em
     * enviado_cozinha (nunca antes) — é o ponto em que o insumo passa a
     * estar comprometido (CLAUDE.md seção 10: "envolve desperdício de
     * insumo" é a razão da regra fixa de cancelamento pós-despacho).
     */
    private function darBaixaEstoquePorItem(ItemPedido $item): void
    {
        $receita = $item->produto->receita;

        if (! $receita) {
            return;
        }

        foreach ($receita->ingredientes as $ingrediente) {
            $this->movimentacaoRepository->registrarSaida(
                $ingrediente->id,
                $ingrediente->pivot->quantidade * $item->quantidade,
                OrigemMovimentacao::RECEITA->value,
                $item->id,
                $this->userId(),
            );
        }
    }

    private function estornarEstoquePorItem(ItemPedido $item): void
    {
        $receita = $item->produto->receita;

        if (! $receita) {
            return;
        }

        foreach ($receita->ingredientes as $ingrediente) {
            $this->movimentacaoRepository->registrarEntrada(
                $ingrediente->id,
                $ingrediente->pivot->quantidade * $item->quantidade,
                OrigemMovimentacao::ESTORNO_RECEITA->value,
                $item->id,
                $this->userId(),
            );
        }
    }
}
