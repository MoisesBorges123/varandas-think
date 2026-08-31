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
     * chamada técnica, só muda onde o QR é exibido). $payerEmail é o
     * e-mail do cliente quando ele identificou um ao abrir a comanda
     * (reduz sinal de fraude na MP vs. usar sempre um e-mail fixo).
     */
    public function gerarPixDinamico(float $valor, string $referenciaExterna, ?string $payerEmail = null): ResultadoCobranca;

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

    /**
     * Lista os terminais Point vinculados à conta (CLAUDE.md seção 6) —
     * alimenta a tela de Configurações pra o dono apontar qual é a
     * maquininha do balcão e qual é a portátil, sem precisar descobrir o
     * device_id manualmente. Terminal só aparece aqui depois de
     * emparelhado fisicamente via o app Point da Mercado Pago — a API
     * não cria/registra o pareamento, só lista o que já existe.
     *
     * @return array<int, array{id: string, pos_id: ?int, store_id: ?int, operating_mode: ?string}>
     */
    public function listarTerminais(): array;
}
