<?php

namespace Tests\Feature\Estoque;

use App\DTO\Estoque\ReceitaDTO;
use App\Enums\Cardapio\TipoProduto;
use App\Models\Ingrediente;
use App\Models\Produto;
use App\Services\ReceitaService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReceitaCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_salvar_receita_cria_os_itens(): void
    {
        $produto = Produto::factory()->create(['tipo' => TipoProduto::PREPARADO->value]);
        $ingrediente = Ingrediente::factory()->create();

        $dto = (new ReceitaDTO())
            ->setProdutoId($produto->id)
            ->setItens([
                ['ingrediente_id' => $ingrediente->id, 'quantidade' => 0.5, 'unidade_medida' => 'kg'],
            ]);

        $receita = app(ReceitaService::class)->salvar($dto);

        $this->assertSame(1, $receita->ingredientes()->count());
        $this->assertDatabaseHas('ingredientes_receita', [
            'receita_id' => $receita->id,
            'ingrediente_id' => $ingrediente->id,
            'quantidade' => 0.5,
        ]);
    }

    public function test_salvar_receita_novamente_substitui_os_itens_em_vez_de_duplicar(): void
    {
        $produto = Produto::factory()->create(['tipo' => TipoProduto::PREPARADO->value]);
        $ingredienteA = Ingrediente::factory()->create();
        $ingredienteB = Ingrediente::factory()->create();

        $service = app(ReceitaService::class);

        $service->salvar(
            (new ReceitaDTO())
                ->setProdutoId($produto->id)
                ->setItens([
                    ['ingrediente_id' => $ingredienteA->id, 'quantidade' => 1, 'unidade_medida' => 'kg'],
                ]),
        );

        $receita = $service->salvar(
            (new ReceitaDTO())
                ->setProdutoId($produto->id)
                ->setItens([
                    ['ingrediente_id' => $ingredienteB->id, 'quantidade' => 2, 'unidade_medida' => 'un'],
                ]),
        );

        $this->assertSame(1, \App\Models\Receita::count());
        $this->assertSame(1, $receita->ingredientes()->count());
        $this->assertSame($ingredienteB->id, $receita->ingredientes()->first()->id);
    }
}
