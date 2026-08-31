<?php

namespace App\Services\Pagamento\Gateway;

/**
 * Isola o resto do sistema dos detalhes técnicos do Mercado Pago —
 * modelado por INTENÇÃO de negócio (cobrar via maquininha, gerar Pix),
 * não por endpoint. Assim, se a MP aposentar a Point Integration API
 * legada em favor da Orders API (já em transição confirmada em
 * pesquisa — ver MercadoPagoGateway), a troca fica contida na
 * implementação, sem vazar pro PagamentoService.
 */
interface MercadoPagoGatewayInterface
{
    /**
     * Manda a ordem de cobrança pra um terminal Point físico (CLAUDE.md
     * seção 6, modalidades "API Point" e "maquininha portátil do
     * garçom") — confirmação vem depois, via webhook.
     */
    public function cobrarViaMaquininha(float $valor, string $deviceId, string $referenciaExterna): ResultadoCobranca;

    /**
     * Gera um Pix dinâmico (QR + copia-e-cola) — usado tanto pro Pix no
     * celular do garçom quanto pro QR impresso na comanda (mesma
     * chamada técnica, só muda onde o QR é exibido).
     */
    public function gerarPixDinamico(float $valor, string $referenciaExterna): ResultadoCobranca;

    /**
     * Consulta o status atual de um pagamento Pix/Payments API — nunca
     * confiar no status embutido no corpo do webhook, sempre reconsultar
     * (recomendação oficial do Mercado Pago).
     */
    public function consultarStatusPagamento(string $mpPaymentId): string;

    /**
     * Consulta o status de uma ordem Point (Orders API) — vocabulário de
     * status diferente do de pagamento (created/at_terminal/processed),
     * por isso é um método separado.
     */
    public function consultarStatusOrdemPoint(string $mpOrderId): string;

    public function estornarPagamento(string $mpPaymentId): bool;
}
