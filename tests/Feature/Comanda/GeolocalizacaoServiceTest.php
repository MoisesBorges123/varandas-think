<?php

namespace Tests\Feature\Comanda;

use App\Models\Configuracao;
use App\Repositories\Contracts\ConfiguracaoRepositoryInterface;
use App\Services\GeolocalizacaoService;
use Mockery;
use Tests\TestCase;

class GeolocalizacaoServiceTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();

        parent::tearDown();
    }

    public function test_distancia_em_metros_entre_pontos_proximos(): void
    {
        $repository = Mockery::mock(ConfiguracaoRepositoryInterface::class);
        $service = new GeolocalizacaoService($repository);

        // ~0.0009 graus de latitude ~= 100 metros.
        $distancia = $service->distanciaEmMetros(-23.5505, -46.6333, -23.5514, -46.6333);

        $this->assertEqualsWithDelta(100, $distancia, 5);
    }

    public function test_distancia_em_metros_no_mesmo_ponto_e_zero(): void
    {
        $repository = Mockery::mock(ConfiguracaoRepositoryInterface::class);
        $service = new GeolocalizacaoService($repository);

        $this->assertEqualsWithDelta(0, $service->distanciaEmMetros(-23.5505, -46.6333, -23.5505, -46.6333), 0.01);
    }

    public function test_esta_dentro_do_raio_true_no_mesmo_ponto(): void
    {
        $configuracao = new Configuracao([
            'bar_latitude' => -23.5505,
            'bar_longitude' => -46.6333,
            'raio_metros' => 100,
        ]);

        $repository = Mockery::mock(ConfiguracaoRepositoryInterface::class);
        $repository->shouldReceive('obter')->andReturn($configuracao);

        $service = new GeolocalizacaoService($repository);

        $this->assertTrue($service->estaDentroDoRaio(-23.5505, -46.6333));
    }

    public function test_esta_dentro_do_raio_false_muito_longe(): void
    {
        $configuracao = new Configuracao([
            'bar_latitude' => -23.5505,
            'bar_longitude' => -46.6333,
            'raio_metros' => 100,
        ]);

        $repository = Mockery::mock(ConfiguracaoRepositoryInterface::class);
        $repository->shouldReceive('obter')->andReturn($configuracao);

        $service = new GeolocalizacaoService($repository);

        // ~1.3km de distância, bem fora dos 100m configurados.
        $this->assertFalse($service->estaDentroDoRaio(-23.560, -46.640));
    }

    public function test_falha_fechado_sem_coordenadas_configuradas(): void
    {
        $configuracao = new Configuracao([
            'bar_latitude' => null,
            'bar_longitude' => null,
            'raio_metros' => 100,
        ]);

        $repository = Mockery::mock(ConfiguracaoRepositoryInterface::class);
        $repository->shouldReceive('obter')->andReturn($configuracao);

        $service = new GeolocalizacaoService($repository);

        $this->assertFalse($service->estaDentroDoRaio(-23.5505, -46.6333));
    }

    public function test_falha_fechado_sem_nenhuma_configuracao(): void
    {
        $repository = Mockery::mock(ConfiguracaoRepositoryInterface::class);
        $repository->shouldReceive('obter')->andReturn(null);

        $service = new GeolocalizacaoService($repository);

        $this->assertFalse($service->estaDentroDoRaio(-23.5505, -46.6333));
    }
}
