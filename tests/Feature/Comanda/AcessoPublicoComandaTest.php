<?php

namespace Tests\Feature\Comanda;

use App\DTO\Comanda\ConfiguracaoDTO;
use App\Enums\Comanda\StatusComanda;
use App\Livewire\Publico\ComandaAcesso;
use App\Livewire\Publico\MesaAcesso;
use App\Models\Comanda;
use App\Models\Mesa;
use App\Services\ConfiguracaoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class AcessoPublicoComandaTest extends TestCase
{
    use RefreshDatabase;

    private function configurarBar(): void
    {
        app(ConfiguracaoService::class)->atualizar(
            (new ConfiguracaoDTO())->setLatitude(-23.5505)->setLongitude(-46.6333)->setRaioMetros(100),
        );
    }

    public function test_rota_de_mesa_nao_exige_autenticacao(): void
    {
        $mesa = Mesa::factory()->create();

        $this->get(route('publico.comanda.mesa', $mesa->token))->assertOk();
    }

    /**
     * O id sequencial nunca pode funcionar como token — senão dá pra
     * navegar de mesa em mesa só incrementando o número na URL.
     */
    public function test_id_sequencial_da_mesa_nao_funciona_como_token(): void
    {
        $mesa = Mesa::factory()->create();

        $this->get(route('publico.comanda.mesa', (string) $mesa->id))->assertNotFound();
    }

    public function test_rota_de_acesso_por_token_nao_exige_autenticacao(): void
    {
        $comanda = Comanda::factory()->create();

        $this->get(route('publico.comanda.acesso', $comanda->token))->assertOk();
    }

    public function test_mesa_acesso_redireciona_quando_ja_tem_comanda_aberta(): void
    {
        $mesa = Mesa::factory()->create();
        $comanda = Comanda::factory()->create(['mesa_id' => $mesa->id]);

        Livewire::test(MesaAcesso::class, ['token' => $mesa->token])
            ->assertRedirect(route('publico.comanda.acesso', $comanda->token));
    }

    public function test_mesa_acesso_mostra_formulario_quando_nao_tem_comanda_aberta(): void
    {
        $mesa = Mesa::factory()->create();

        Livewire::test(MesaAcesso::class, ['token' => $mesa->token])
            ->assertSee('Mesa '.$mesa->numero);
    }

    public function test_abrir_comanda_fora_do_raio_nao_cria_comanda(): void
    {
        $this->configurarBar();
        $mesa = Mesa::factory()->create();

        Livewire::test(MesaAcesso::class, ['token' => $mesa->token])
            ->set('clienteNome', 'João')
            ->set('clienteCpf', '111.111.111-11')
            ->set('clienteTelefone', '11999999999')
            ->set('tipo', 'individual')
            ->call('abrirComanda', -23.9, -46.9) // bem longe do raio configurado
            ->assertSet('foraDoRaio', true);

        $this->assertDatabaseCount('comandas', 0);
    }

    public function test_abrir_comanda_dentro_do_raio_cria_e_redireciona(): void
    {
        $this->configurarBar();
        $mesa = Mesa::factory()->create();

        Livewire::test(MesaAcesso::class, ['token' => $mesa->token])
            ->set('clienteNome', 'João')
            ->set('clienteCpf', '111.111.111-11')
            ->set('clienteTelefone', '11999999999')
            ->set('tipo', 'individual')
            ->call('abrirComanda', -23.5505, -46.6333);

        $this->assertDatabaseCount('comandas', 1);
    }

    /**
     * O teste mais importante desta feature: token inválido, comanda
     * fechada, e fora do raio precisam ser indistinguíveis pra quem está
     * do outro lado do link — mesmo `liberado === false`, a mesma
     * mensagem genérica visível nos três casos, e nenhum dado da comanda
     * vazado. (Comparação byte-a-byte do HTML completo não serve de
     * invariante aqui: o wire:snapshot de cada instância inclui o próprio
     * token — que É diferente por design entre os cenários — então o HTML
     * bruto nunca seria idêntico mesmo estando tudo correto.)
     */
    public function test_negacao_de_acesso_nao_vaza_dados_em_nenhum_dos_tres_cenarios(): void
    {
        $this->configurarBar();

        $mensagemGenerica = 'Esse link não está disponível no momento';

        $comandaFechada = Comanda::factory()->fechada()->create(['cliente_nome' => 'Maria Fechada']);
        $comandaForaDoRaio = Comanda::factory()->create(['cliente_nome' => 'Pedro Longe']);

        $htmlTokenInvalido = Livewire::test(ComandaAcesso::class, ['token' => 'token-que-nao-existe'])
            ->call('verificarLocalizacao', -23.5505, -46.6333)
            ->assertSet('liberado', false)
            ->assertSee($mensagemGenerica)
            ->html();

        $htmlFechada = Livewire::test(ComandaAcesso::class, ['token' => $comandaFechada->token])
            ->call('verificarLocalizacao', -23.5505, -46.6333)
            ->assertSet('liberado', false)
            ->assertSee($mensagemGenerica)
            ->html();

        $htmlForaDoRaio = Livewire::test(ComandaAcesso::class, ['token' => $comandaForaDoRaio->token])
            ->call('verificarLocalizacao', -23.9, -46.9)
            ->assertSet('liberado', false)
            ->assertSee($mensagemGenerica)
            ->html();

        foreach ([$htmlTokenInvalido, $htmlFechada, $htmlForaDoRaio] as $html) {
            $this->assertStringNotContainsString('Maria Fechada', $html);
            $this->assertStringNotContainsString('Pedro Longe', $html);
            $this->assertStringNotContainsString('cardapio-cliente', $html);
            $this->assertStringNotContainsString('pedidos-vazio', $html);
            $this->assertStringNotContainsString('btn-encerrar-comanda', $html);
        }
    }

    public function test_caminho_feliz_mostra_dados_da_comanda(): void
    {
        $this->configurarBar();
        $comanda = Comanda::factory()->create();

        Livewire::test(ComandaAcesso::class, ['token' => $comanda->token])
            ->call('verificarLocalizacao', -23.5505, -46.6333)
            ->assertSet('liberado', true)
            ->assertSee($comanda->mesa->numero);
    }
}
