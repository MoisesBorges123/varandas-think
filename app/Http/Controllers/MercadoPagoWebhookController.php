<?php

namespace App\Http\Controllers;

use App\Services\Pagamento\PagamentoService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Recebe as notificações de pagamento do Mercado Pago (CLAUDE.md seção
 * 6) — sem sessão/CSRF (chamado pelos servidores da MP), autenticidade
 * garantida verificando a assinatura HMAC do header `x-signature`
 * (ver bootstrap/app.php pra exceção de CSRF desta rota).
 *
 * Formato do payload e algoritmo de assinatura conforme documentação
 * oficial (developers.mercadopago.com/.../notifications/webhooks),
 * confirmado em pesquisa de agosto/2026:
 *   manifest = "id:{data.id-minusculo};request-id:{x-request-id};ts:{ts};"
 *   assinatura = hash_hmac('sha256', manifest, MP_WEBHOOK_SECRET)
 */
class MercadoPagoWebhookController extends Controller
{
    /**
     * Eventos que o sistema sabe tratar — qualquer outro `type`/`topic`
     * (ex.: `merchant_order`) é aceito (200) mas ignorado, seguindo o
     * padrão recomendado pela MP de nunca dar erro pra evento
     * desconhecido (ela reenviaria indefinidamente).
     */
    private const TIPOS_TRATADOS = ['payment', 'order'];

    /**
     * Janela de tolerância pro timestamp da assinatura — defesa extra
     * contra replay de uma requisição capturada (o HMAC sozinho não
     * expira; sem isso, o mesmo request assinado continuaria válido pra
     * sempre).
     */
    private const TOLERANCIA_TS_SEGUNDOS = 600;

    public function __invoke(Request $request, PagamentoService $service): JsonResponse
    {
        if (! $this->assinaturaValida($request)) {
            return response()->json(['message' => 'assinatura inválida'], 401);
        }

        $tipo = (string) ($request->input('type') ?? $request->input('topic', ''));
        $mpResourceId = (string) $request->input('data.id', '');

        if (in_array($tipo, self::TIPOS_TRATADOS, true) && $mpResourceId !== '') {
            $service->processarWebhook($mpResourceId);
        }

        return response()->json(['message' => 'ok']);
    }

    private function assinaturaValida(Request $request): bool
    {
        $secret = config('services.mercadopago.webhook_secret');

        if (! $secret) {
            // Sem secret configurado (sem credencial real ainda) — recusa
            // por segurança, nunca aceita cego (fail closed).
            return false;
        }

        [$ts, $v1] = $this->extrairPartesDaAssinatura((string) $request->header('x-signature', ''));

        if ($ts === null || $v1 === null || ! $this->timestampDentroDaJanela($ts)) {
            return false;
        }

        $requestId = (string) $request->header('x-request-id', '');
        $dataId = mb_strtolower((string) $request->input('data.id', ''));

        $manifest = "id:{$dataId};request-id:{$requestId};ts:{$ts};";
        $assinaturaCalculada = hash_hmac('sha256', $manifest, $secret);

        return hash_equals($assinaturaCalculada, $v1);
    }

    private function timestampDentroDaJanela(string $ts): bool
    {
        if (! ctype_digit($ts)) {
            return false;
        }

        return abs(time() - (int) $ts) <= self::TOLERANCIA_TS_SEGUNDOS;
    }

    /**
     * @return array{0: ?string, 1: ?string} [ts, v1]
     */
    private function extrairPartesDaAssinatura(string $header): array
    {
        $partes = [];

        foreach (explode(',', $header) as $par) {
            [$chave, $valor] = array_pad(explode('=', trim($par), 2), 2, null);

            if ($chave !== null) {
                $partes[trim($chave)] = $valor !== null ? trim($valor) : null;
            }
        }

        return [$partes['ts'] ?? null, $partes['v1'] ?? null];
    }
}
