<?php

namespace App\Services;

use App\Repositories\Contracts\ConfiguracaoRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Support\Facades\Log;

/**
 * Trava de segurança do cliente (CLAUDE.md seção 4.4): decide se um par
 * de coordenadas está dentro do raio configurável do bar. Falha fechado
 * (nega) quando o admin ainda não configurou as coordenadas — nunca
 * assume "liberado" por padrão.
 */
class GeolocalizacaoService extends ServiceBase
{
    public function __construct(
        private readonly ConfiguracaoRepositoryInterface $configuracaoRepository,
    ) {
    }

    /**
     * Distância em metros entre dois pontos (fórmula de Haversine) —
     * cálculo puro, sem acesso a banco, testável isoladamente.
     */
    public function distanciaEmMetros(float $lat1, float $lng1, float $lat2, float $lng2): float
    {
        $raioTerraMetros = 6371000;

        $dLat = deg2rad($lat2 - $lat1);
        $dLng = deg2rad($lng2 - $lng1);

        $a = sin($dLat / 2) ** 2
            + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLng / 2) ** 2;

        return $raioTerraMetros * 2 * atan2(sqrt($a), sqrt(1 - $a));
    }

    public function estaDentroDoRaio(float $lat, float $lng): bool
    {
        $config = $this->configuracaoRepository->obter();

        if ($config === null || $config->bar_latitude === null || $config->bar_longitude === null) {
            Log::info('Geolocalização negada: bar sem coordenadas configuradas.', ['lat' => $lat, 'lng' => $lng]);

            return false;
        }

        $distancia = $this->distanciaEmMetros($lat, $lng, (float) $config->bar_latitude, (float) $config->bar_longitude);
        $dentro = $distancia <= $config->raio_metros;

        // Log só na negação (permanente e intencional): quando um cliente
        // real for barrado sem entender por quê, essa é a única forma de
        // auditar se foi imprecisão de GPS ou raio curto demais. Não loga
        // sucesso — é o caminho comum, logar todo acesso geraria volume
        // desnecessário em produção.
        if (! $dentro) {
            Log::info('Geolocalização negada: fora do raio configurado.', [
                'lat_recebida' => $lat,
                'lng_recebida' => $lng,
                'lat_bar' => (float) $config->bar_latitude,
                'lng_bar' => (float) $config->bar_longitude,
                'distancia_metros' => round($distancia, 1),
                'raio_configurado' => $config->raio_metros,
            ]);
        }

        return $dentro;
    }
}
