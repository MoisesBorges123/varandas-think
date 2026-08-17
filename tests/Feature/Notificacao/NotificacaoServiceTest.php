<?php

namespace Tests\Feature\Notificacao;

use App\Enums\Notificacao\TipoNotificacao;
use App\Enums\Usuario\PerfilNome;
use App\Models\Perfil;
use App\Models\Usuario;
use App\Services\NotificacaoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class NotificacaoServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_notificacao_de_perfil_aparece_para_qualquer_usuario_daquele_perfil(): void
    {
        $perfilAdmin = Perfil::factory()->create(['nome' => PerfilNome::ADMINISTRADOR->value]);
        $admin1 = Usuario::factory()->create(['perfil_id' => $perfilAdmin->id]);
        $admin2 = Usuario::factory()->create(['perfil_id' => $perfilAdmin->id]);

        app(NotificacaoService::class)->notificarPerfil(
            PerfilNome::ADMINISTRADOR,
            TipoNotificacao::INGREDIENTE_SEM_GRUPO,
            'Título de teste',
            'Mensagem de teste',
        );

        Auth::login($admin1);
        $this->assertCount(1, app(NotificacaoService::class)->pendentesParaUsuarioAutenticado());

        Auth::login($admin2);
        $this->assertCount(1, app(NotificacaoService::class)->pendentesParaUsuarioAutenticado());
    }

    public function test_notificacao_de_perfil_nao_aparece_para_usuario_de_outro_perfil(): void
    {
        $perfilAdmin = Perfil::factory()->create(['nome' => PerfilNome::ADMINISTRADOR->value]);
        $perfilGarcom = Perfil::factory()->create(['nome' => PerfilNome::GARCOM->value]);
        $garcom = Usuario::factory()->create(['perfil_id' => $perfilGarcom->id]);

        app(NotificacaoService::class)->notificarPerfil(
            PerfilNome::ADMINISTRADOR,
            TipoNotificacao::INGREDIENTE_SEM_GRUPO,
            'Título de teste',
            'Mensagem de teste',
        );

        Auth::login($garcom);
        $this->assertCount(0, app(NotificacaoService::class)->pendentesParaUsuarioAutenticado());
    }

    public function test_resolver_por_referencia_remove_da_lista_de_pendentes(): void
    {
        $perfilAdmin = Perfil::factory()->create(['nome' => PerfilNome::ADMINISTRADOR->value]);
        $admin = Usuario::factory()->create(['perfil_id' => $perfilAdmin->id]);

        $service = app(NotificacaoService::class);

        $service->notificarPerfil(
            PerfilNome::ADMINISTRADOR,
            TipoNotificacao::INGREDIENTE_SEM_GRUPO,
            'Título de teste',
            'Mensagem de teste',
            'ingrediente',
            123,
        );

        $service->resolverPorReferencia(TipoNotificacao::INGREDIENTE_SEM_GRUPO, 'ingrediente', 123);

        Auth::login($admin);
        $this->assertCount(0, $service->pendentesParaUsuarioAutenticado());
    }
}
