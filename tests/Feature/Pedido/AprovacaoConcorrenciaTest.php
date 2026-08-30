<?php

namespace Tests\Feature\Pedido;

use App\Enums\Pedido\StatusItemPedido;
use App\Enums\Usuario\PerfilNome;
use App\Models\Comanda;
use App\Models\ItemPedido;
use App\Models\Perfil;
use App\Models\Usuario;
use App\Services\Pedido\ItemPedidoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Reproduz o "perdedor" da trava otimista de aprovação (CLAUDE.md seção
 * 4.2) sem precisar de concorrência real: PHPUnit é single-thread, então
 * chamar aprovar() duas vezes em sequência já faz a 2ª bater 0 linhas no
 * WHERE status = pendente_aprovacao — exatamente o cenário de dois
 * garçons aprovando ao mesmo tempo.
 */
class AprovacaoConcorrenciaTest extends TestCase
{
    use RefreshDatabase;

    private function garcom(): Usuario
    {
        $perfil = Perfil::firstOrCreate(['nome' => PerfilNome::GARCOM->value]);

        return Usuario::factory()->create(['perfil_id' => $perfil->id]);
    }

    public function test_segunda_aprovacao_simultanea_recebe_mensagem_amigavel(): void
    {
        $garcomA = $this->garcom();
        $garcomB = $this->garcom();

        $comanda = Comanda::factory()->create(['garcom_id' => null]);
        $item = ItemPedido::factory()->pendenteAprovacao()->deCliente()->create(['comanda_id' => $comanda->id]);

        $service = app(ItemPedidoService::class);

        $primeiraAprovacao = $service->aprovar($item->id, $garcomA->id);
        $this->assertSame(StatusItemPedido::ENVIADO_COZINHA, $primeiraAprovacao->status);

        $this->expectExceptionMessage('Este pedido já foi resolvido por outro colega.');

        $service->aprovar($item->id, $garcomB->id);
    }
}
