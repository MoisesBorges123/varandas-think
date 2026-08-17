<?php

namespace Tests\Feature\Auth;

use App\Livewire\Auth\Login;
use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_page_renders(): void
    {
        $this->get(route('login'))
            ->assertOk()
            ->assertSeeLivewire(Login::class);
    }

    public function test_credenciais_invalidas_nao_autenticam_e_disparam_toastr(): void
    {
        $usuario = Usuario::factory()->create(['password' => 'senha-correta']);

        Livewire::test(Login::class)
            ->set('email', $usuario->email)
            ->set('password', 'senha-errada')
            ->call('login')
            ->assertDispatched('toastr');

        $this->assertGuest();
    }

    public function test_credenciais_validas_autenticam_e_redirecionam_para_painel(): void
    {
        $usuario = Usuario::factory()->create(['password' => 'senha-correta']);

        Livewire::test(Login::class)
            ->set('email', $usuario->email)
            ->set('password', 'senha-correta')
            ->call('login')
            ->assertRedirect(route('painel'));

        $this->assertAuthenticatedAs($usuario);
    }

    public function test_usuario_inativo_e_bloqueado_mesmo_com_senha_correta(): void
    {
        $usuario = Usuario::factory()->inativo()->create(['password' => 'senha-correta']);

        Livewire::test(Login::class)
            ->set('email', $usuario->email)
            ->set('password', 'senha-correta')
            ->call('login')
            ->assertDispatched('toastr');

        $this->assertGuest();
    }
}
