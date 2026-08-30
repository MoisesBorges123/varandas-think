<?php

namespace App\Enums\Notificacao;

enum TipoNotificacao: string
{
    case INGREDIENTE_SEM_GRUPO = 'ingrediente_sem_grupo';
    case PEDIDO_PRONTO = 'pedido_pronto';

    public function label(): string
    {
        return match ($this) {
            self::INGREDIENTE_SEM_GRUPO => 'Insumo sem grupo de equivalência',
            self::PEDIDO_PRONTO => 'Pedido pronto na cozinha',
        };
    }
}
