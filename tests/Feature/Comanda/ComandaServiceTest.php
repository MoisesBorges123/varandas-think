<?php

namespace Tests\Feature\Comanda;

use App\DTO\Comanda\AbrirComandaDTO;
use App\Enums\Comanda\StatusComanda;
use App\Enums\Comanda\TipoComanda;
use App\Models\Comanda;
use App\Models\Mesa;
use App\Models\Usuario;
use App\Services\ComandaService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ComandaServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_abrir_comanda_individual(): void
    {
        $mesa = Mesa::factory()->create();

        $dto = (new AbrirComandaDTO())->setMesaId($mesa->id)->setTipo(TipoComanda::INDIVIDUAL);

        $comanda = app(ComandaService::class)->abrir($dto);

        $this->assertSame(TipoComanda::INDIVIDUAL, $comanda->tipo);
        $this->assertSame(StatusComanda::ABERTA, $comanda->status);
        $this->assertNotNull($comanda->token);
        $this->assertNotEquals((string) $comanda->id, $comanda->token);
    }

    public function test_abrir_comanda_compartilhada(): void
    {
        $mesa = Mesa::factory()->create();

        $dto = (new AbrirComandaDTO())->setMesaId($mesa->id)->setTipo(TipoComanda::COMPARTILHADA);

        $comanda = app(ComandaService::class)->abrir($dto);

        $this->assertSame(TipoComanda::COMPARTILHADA, $comanda->tipo);
    }

    public function test_token_gerado_e_unico_por_comanda(): void
    {
        $mesaA = Mesa::factory()->create();
        $mesaB = Mesa::factory()->create();
        $service = app(ComandaService::class);

        $comandaA = $service->abrir((new AbrirComandaDTO())->setMesaId($mesaA->id)->setTipo(TipoComanda::INDIVIDUAL));
        $comandaB = $service->abrir((new AbrirComandaDTO())->setMesaId($mesaB->id)->setTipo(TipoComanda::INDIVIDUAL));

        $this->assertNotEquals($comandaA->token, $comandaB->token);
    }

    public function test_abrir_segunda_comanda_na_mesma_mesa_aberta_e_bloqueado(): void
    {
        $mesa = Mesa::factory()->create();
        Comanda::factory()->create(['mesa_id' => $mesa->id]);

        $this->expectExceptionMessage('Esta mesa já possui uma comanda aberta.');

        app(ComandaService::class)->abrir(
            (new AbrirComandaDTO())->setMesaId($mesa->id)->setTipo(TipoComanda::INDIVIDUAL),
        );
    }

    public function test_atribuir_garcom(): void
    {
        $comanda = Comanda::factory()->create();
        $garcom = Usuario::factory()->create();

        app(ComandaService::class)->atribuirGarcom($comanda->id, $garcom->id);

        $this->assertSame($garcom->id, $comanda->fresh()->garcom_id);
    }

    public function test_fechar_comanda(): void
    {
        $comanda = Comanda::factory()->create();

        app(ComandaService::class)->fechar($comanda->id);

        $comandaFechada = $comanda->fresh();
        $this->assertSame(StatusComanda::FECHADA, $comandaFechada->status);
        $this->assertNotNull($comandaFechada->fechada_em);
    }

    public function test_fechar_comanda_ja_fechada_lanca_erro(): void
    {
        $comanda = Comanda::factory()->fechada()->create();

        $this->expectExceptionMessage('Esta comanda já está fechada.');

        app(ComandaService::class)->fechar($comanda->id);
    }
}
