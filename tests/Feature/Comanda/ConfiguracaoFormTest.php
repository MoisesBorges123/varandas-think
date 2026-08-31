<?php

namespace Tests\Feature\Comanda;

use App\Livewire\Comanda\ConfiguracaoForm;
use App\Models\Configuracao;
use App\Models\Usuario;
use App\Services\Pagamento\Gateway\MercadoPagoGatewayInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ConfiguracaoFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_requer_autenticacao(): void
    {
        $this->get(route('comandas.configuracoes'))
            ->assertRedirect(route('login'));
    }

    public function test_admin_atualiza_coordenadas_e_raio(): void
    {
        $usuario = Usuario::factory()->create();

        Livewire::actingAs($usuario)
            ->test(ConfiguracaoForm::class)
            ->set('latitude', '-23.5505')
            ->set('longitude', '-46.6333')
            ->set('raioMetros', '150')
            ->call('salvar')
            ->assertHasNoErrors();

        $this->assertDatabaseHas('configuracoes', [
            'id' => 1,
            'raio_metros' => 150,
        ]);
    }

    public function test_singleton_nunca_cria_segunda_linha(): void
    {
        $usuario = Usuario::factory()->create();

        Livewire::actingAs($usuario)
            ->test(ConfiguracaoForm::class)
            ->set('latitude', '-23.5505')
            ->set('longitude', '-46.6333')
            ->set('raioMetros', '150')
            ->call('salvar');

        Livewire::actingAs($usuario)
            ->test(ConfiguracaoForm::class)
            ->set('latitude', '-23.5510')
            ->set('longitude', '-46.6340')
            ->set('raioMetros', '200')
            ->call('salvar');

        $this->assertSame(1, Configuracao::count());
    }

    public function test_buscar_terminais_lista_maquininhas_encontradas(): void
    {
        $this->mock(MercadoPagoGatewayInterface::class, function ($mock) {
            $mock->shouldReceive('listarTerminais')->once()->andReturn([
                ['id' => 'NEWLAND_N950__N950NCB801293324', 'pos_id' => 123, 'store_id' => 1, 'operating_mode' => 'PDV'],
            ]);
        });

        $usuario = Usuario::factory()->create();

        Livewire::actingAs($usuario)
            ->test(ConfiguracaoForm::class)
            ->call('atualizarTerminais')
            ->assertSet('terminaisDisponiveis.0.id', 'NEWLAND_N950__N950NCB801293324')
            ->assertSet('erroTerminais', null);
    }

    public function test_selecionar_terminal_preenche_o_campo_correspondente(): void
    {
        $usuario = Usuario::factory()->create();

        Livewire::actingAs($usuario)
            ->test(ConfiguracaoForm::class)
            ->call('selecionarTerminalBalcao', 'TERMINAL-BALCAO-1')
            ->assertSet('mpDeviceIdBalcao', 'TERMINAL-BALCAO-1')
            ->call('selecionarTerminalPortatil', 'TERMINAL-PORTATIL-1')
            ->assertSet('mpDeviceIdPortatil', 'TERMINAL-PORTATIL-1');
    }

    public function test_busca_sem_terminais_encontrados_mostra_estado_vazio(): void
    {
        $this->mock(MercadoPagoGatewayInterface::class, function ($mock) {
            $mock->shouldReceive('listarTerminais')->once()->andReturn([]);
        });

        $usuario = Usuario::factory()->create();

        Livewire::actingAs($usuario)
            ->test(ConfiguracaoForm::class)
            ->call('atualizarTerminais')
            ->assertSet('terminaisDisponiveis', [])
            ->assertSet('jaBuscouTerminais', true)
            ->assertSee('Nenhuma maquininha encontrada');
    }

    public function test_falha_na_busca_de_terminais_nao_quebra_a_tela(): void
    {
        $this->mock(MercadoPagoGatewayInterface::class, function ($mock) {
            $mock->shouldReceive('listarTerminais')->once()->andThrow(new \Exception('falha de rede'));
        });

        $usuario = Usuario::factory()->create();

        Livewire::actingAs($usuario)
            ->test(ConfiguracaoForm::class)
            ->call('atualizarTerminais')
            ->assertSet('terminaisDisponiveis', [])
            ->assertSee('Não foi possível consultar as maquininhas agora');
    }
}
