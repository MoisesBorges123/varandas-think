<?php

namespace App\Enums\Pedido;

enum StatusItemPedido: string
{
    case PENDENTE_APROVACAO = 'pendente_aprovacao';
    case APROVADO = 'aprovado';
    case REJEITADO = 'rejeitado';
    case ENVIADO_COZINHA = 'enviado_cozinha';
    case PRONTO = 'pronto';
    case LIBERADO_BALCAO = 'liberado_balcao';
    case ENTREGUE = 'entregue';
    case CANCELADO = 'cancelado';
    case INDISPONIVEL_ESTOQUE = 'indisponivel_estoque';

    /**
     * Rótulo técnico — uso interno/staff (painel, cozinha, balcão).
     * NUNCA usar no lado do cliente — ver labelParaCliente().
     */
    public function label(): string
    {
        return match ($this) {
            self::PENDENTE_APROVACAO => 'Pendente de aprovação',
            self::APROVADO => 'Aprovado',
            self::REJEITADO => 'Rejeitado',
            self::ENVIADO_COZINHA => 'Enviado à cozinha',
            self::PRONTO => 'Pronto',
            self::LIBERADO_BALCAO => 'Liberado pelo balcão',
            self::ENTREGUE => 'Entregue',
            self::CANCELADO => 'Cancelado',
            self::INDISPONIVEL_ESTOQUE => 'Indisponível',
        };
    }

    /**
     * Rótulo pro cliente (CLAUDE.md seção 4.2: nunca linguagem técnica).
     * Rejeitado, sem estoque e cancelado caem todos na mesma mensagem
     * gentil — o cliente nunca precisa saber qual dos três aconteceu.
     */
    public function labelParaCliente(): string
    {
        return match ($this) {
            self::REJEITADO, self::INDISPONIVEL_ESTOQUE, self::CANCELADO
                => 'Nosso garçom vai até sua mesa pra te ajudar com seu pedido',
            self::PENDENTE_APROVACAO => 'Aguardando confirmação',
            self::APROVADO, self::ENVIADO_COZINHA => 'Preparando',
            self::PRONTO => 'Pronto',
            self::LIBERADO_BALCAO => 'A caminho da sua mesa',
            self::ENTREGUE => 'Entregue',
        };
    }
}
