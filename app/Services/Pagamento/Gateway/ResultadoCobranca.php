<?php

namespace App\Services\Pagamento\Gateway;

/**
 * Retorno padronizado do gateway, independente de qual chamada da API
 * do Mercado Pago gerou (Orders API pro Point, Payments API pro Pix) —
 * o resto do sistema não precisa conhecer o formato de resposta de cada
 * endpoint.
 */
final class ResultadoCobranca
{
    public function __construct(
        public readonly string $mpId,
        public readonly string $status,
        public readonly ?string $qrCode = null,
        public readonly ?string $qrCodeBase64 = null,
    ) {
    }
}
