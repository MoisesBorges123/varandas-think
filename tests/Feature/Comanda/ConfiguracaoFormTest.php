<?php

namespace Tests\Feature\Comanda;

use App\Livewire\Comanda\ConfiguracaoForm;
use App\Models\Configuracao;
use App\Models\Usuario;
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
}
