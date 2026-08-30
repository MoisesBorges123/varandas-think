<?php

namespace App\Exceptions;

/**
 * Aviso, não erro definitivo — a checagem de estoque no momento do
 * pedido é só um alerta prévio (CLAUDE.md seção 4.3), a checagem que
 * vale de verdade é a da aprovação. A UI deve tratar isso como um
 * "pedir mesmo assim?" em vez de uma mensagem de erro seca.
 */
class EstoqueProvavelmenteIndisponivelException extends \Exception
{
    public function __construct(string $message = 'Esse item pode estar em falta no momento.')
    {
        parent::__construct($message);
    }
}
