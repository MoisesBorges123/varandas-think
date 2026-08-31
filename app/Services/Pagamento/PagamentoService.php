<?php

namespace App\Services\Pagamento;

use App\DTO\Pagamento\RegistrarPagamentoPorItensDTO;
use App\DTO\Pagamento\RegistrarPagamentoValorLivreDTO;
use App\Enums\Pagamento\FormaPagamento;
use App\Enums\Pagamento\StatusPagamento;
use App\Enums\Pagamento\TipoPagamento;
use App\Models\Pagamento;
use App\Repositories\Contracts\ItemPedidoRepositoryInterface;
use App\Repositories\Contracts\PagamentoRepositoryInterface;
use App\Services\Base\ServiceBase;
use App\Services\ComandaService;
use App\Services\Pagamento\Gateway\MercadoPagoGatewayInterface;
use Illuminate\Support\Str;

/**
 * Orquestrador central do pagamento de comanda (CLAUDE.md seção 6/6.1) —
 * por itens específicos ou valor livre, com ou sem gateway por trás
 * dependendo da forma de pagamento, e o fechamento automático da comanda
 * quando o saldo zera.
 */
class PagamentoService extends ServiceBase
{
    public function __construct(
        private readonly PagamentoRepositoryInterface $pagamentoRepository,
        private readonly ItemPedidoRepositoryInterface $itemPedidoRepository,
        private readonly ExtratoComandaService $extratoService,
        private readonly ComandaService $comandaService,
        private readonly MercadoPagoGatewayInterface $gateway,
    ) {
    }

    public function registrarPorItens(RegistrarPagamentoPorItensDTO $dto): Pagamento
    {
        $dto->validate();

        return $this->transaction(function () use ($dto) {
            $extrato = $this->extratoService->calcular($dto->getComandaId());
            $itensSelecionados = $extrato->itensAbertos->whereIn('id', $dto->getItemPedidoIds());

            $this->throwUnless(
                $itensSelecionados->count() === count($dto->getItemPedidoIds()),
                'Um dos itens selecionados já foi pago ou não pertence a esta comanda.',
            );

            $valor = (float) $itensSelecionados->sum(
                fn ($item) => (float) $item->precoProduto->preco * $item->quantidade,
            );

            $pagamento = $this->criarEProcessarPagamento(
                comandaId: $dto->getComandaId(),
                tipo: TipoPagamento::ITEM_ESPECIFICO,
                valor: $valor,
                formaPagamento: $dto->getFormaPagamento(),
                nomePagador: $dto->getNomePagador(),
                deviceId: $dto->getDeviceId(),
                itemPedidoIds: $dto->getItemPedidoIds(),
            );

            $this->fecharComandaSeSaldoZerado($dto->getComandaId());

            return $pagamento;
        });
    }

    public function registrarPorValorLivre(RegistrarPagamentoValorLivreDTO $dto): Pagamento
    {
        $dto->validate();

        return $this->transaction(function () use ($dto) {
            $pagamento = $this->criarEProcessarPagamento(
                comandaId: $dto->getComandaId(),
                tipo: TipoPagamento::VALOR_LIVRE,
                valor: $dto->getValor(),
                formaPagamento: $dto->getFormaPagamento(),
                nomePagador: $dto->getNomePagador(),
                deviceId: $dto->getDeviceId(),
                itemPedidoIds: [],
            );

            $this->fecharComandaSeSaldoZerado($dto->getComandaId());

            return $pagamento;
        });
    }

    /**
     * Chamado pelo webhook do Mercado Pago (App\Http\Controllers\MercadoPagoWebhookController)
     * — nunca confia no status embutido no corpo do webhook, sempre
     * reconsulta a API (recomendação oficial da MP, e também a única
     * forma de tratar reenvios do mesmo evento de forma idempotente).
     */
    public function processarWebhook(string $mpResourceId): void
    {
        $pagamento = $this->pagamentoRepository->buscarPorMpId($mpResourceId);

        if (! $pagamento || in_array($pagamento->status, [StatusPagamento::CONFIRMADO, StatusPagamento::ESTORNADO], true)) {
            // Não é nosso, ou já está num status terminal — idempotente,
            // ignora silenciosamente (a MP reenvia o mesmo evento).
            return;
        }

        $novoStatus = $pagamento->usaOrdersApi()
            ? $this->gateway->consultarStatusOrdemPoint($mpResourceId)
            : $this->gateway->consultarStatusPagamento($mpResourceId);

        if ($novoStatus === $pagamento->status->value) {
            return;
        }

        $this->transaction(function () use ($pagamento, $novoStatus) {
            $this->pagamentoRepository->update($pagamento->id, [
                'status' => $novoStatus,
                'confirmado_em' => $novoStatus === StatusPagamento::CONFIRMADO->value ? $this->now() : null,
            ]);

            if ($novoStatus === StatusPagamento::CONFIRMADO->value) {
                $this->fecharComandaSeSaldoZerado($pagamento->comanda_id);
            }
        });
    }

    /**
     * @param  array<int, int>  $itemPedidoIds
     */
    private function criarEProcessarPagamento(
        int $comandaId,
        TipoPagamento $tipo,
        float $valor,
        string $formaPagamento,
        ?string $nomePagador,
        ?string $deviceId,
        array $itemPedidoIds,
    ): Pagamento {
        $forma = FormaPagamento::from($formaPagamento);
        $referenciaExterna = (string) Str::uuid();

        $dadosBase = [
            'comanda_id' => $comandaId,
            'tipo' => $tipo->value,
            'valor' => $valor,
            'nome_pagador' => $nomePagador,
            'forma_pagamento' => $forma->value,
            'registrado_por' => $this->userId(),
        ];

        if ($forma === FormaPagamento::DINHEIRO) {
            $dadosBase += ['status' => StatusPagamento::CONFIRMADO->value, 'confirmado_em' => $this->now()];

            return $this->pagamentoRepository->criarComItens($dadosBase, $itemPedidoIds);
        }

        if ($forma->precisaDeTerminal()) {
            $this->throwUnless((bool) $deviceId, 'Nenhuma maquininha configurada para esta forma de pagamento.');

            $resultado = $this->gateway->cobrarViaMaquininha($valor, $deviceId, $referenciaExterna);

            $dadosBase += [
                'mp_payment_id' => $resultado->mpId,
                'mp_device_id' => $deviceId,
                'status' => $resultado->status,
            ];

            return $this->pagamentoRepository->criarComItens($dadosBase, $itemPedidoIds);
        }

        // pix_celular ou pix_qrcode_impresso — mesma chamada técnica,
        // só muda onde o QR é exibido (ver FormaPagamento::ehPix()). Usa
        // o e-mail do cliente quando ele identificou um ao abrir a
        // comanda (reduz sinal de fraude na MP vs. e-mail fixo sempre
        // igual).
        $comanda = $this->comandaService->encontrarComRelacoes($comandaId);
        $resultado = $this->gateway->gerarPixDinamico($valor, $referenciaExterna, $comanda->cliente_email);

        $dadosBase += [
            'mp_payment_id' => $resultado->mpId,
            'pix_qr_code' => $resultado->qrCode,
            'pix_qr_code_base64' => $resultado->qrCodeBase64,
            'status' => $resultado->status,
        ];

        return $this->pagamentoRepository->criarComItens($dadosBase, $itemPedidoIds);
    }

    /**
     * CLAUDE.md seção 4.1: "só fecha quando o saldo total zera, ou por
     * encerramento manual" — o encerramento manual já existe
     * (ComandaService::fechar chamado direto pelo garçom/cliente); este
     * é o gatilho automático quando um pagamento confirmado zera a conta.
     */
    private function fecharComandaSeSaldoZerado(int $comandaId): void
    {
        $extrato = $this->extratoService->calcular($comandaId);

        if ($extrato->saldoRestante > 0) {
            return;
        }

        $comanda = $this->comandaService->encontrarComRelacoes($comandaId);

        if ($comanda->estaAberta()) {
            $this->comandaService->fechar($comandaId);
        }
    }
}
