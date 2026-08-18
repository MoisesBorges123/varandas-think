<?php

namespace Tests\Feature\NotaFiscal;

use App\DTO\NotaFiscal\ConfirmarImportacaoDTO;
use App\DTO\NotaFiscal\DadosNotaFiscalDTO;
use App\Enums\Estoque\FonteCompra;
use App\Enums\Notificacao\TipoNotificacao;
use App\Enums\Usuario\PerfilNome;
use App\Models\GrupoEquivalencia;
use App\Models\Ingrediente;
use App\Models\Perfil;
use App\Services\NotaFiscal\ImportacaoNotaFiscalService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ImportacaoNotaFiscalServiceTest extends TestCase
{
    use RefreshDatabase;

    private function dadosNotaComDoisItens(?string $chave = null): DadosNotaFiscalDTO
    {
        return (new DadosNotaFiscalDTO())
            ->setFornecedorCnpj('11.222.333/0001-44')
            ->setFornecedorRazaoSocial('Distribuidora Teste')
            ->setFornecedorUf('MG')
            ->setChaveAcesso($chave ?? str_pad((string) random_int(1, 999999), 44, '0', STR_PAD_LEFT))
            ->setFonte(FonteCompra::SCRAPING_SEFAZ)
            ->setDataCompra(now()->toDateString())
            ->setValorTotal(150.00)
            ->setItens([
                0 => ['codigo_fiscal' => '111', 'descricao' => 'Cenoura', 'ncm' => null, 'cfop' => null, 'cest' => null, 'unidade' => 'KG', 'quantidade' => 5.0, 'valor_unitario' => 10.0, 'valor_total_item' => 50.0],
                1 => ['codigo_fiscal' => '222', 'descricao' => 'Batata', 'ncm' => null, 'cfop' => null, 'cest' => null, 'unidade' => 'KG', 'quantidade' => 10.0, 'valor_unitario' => 10.0, 'valor_total_item' => 100.0],
            ]);
    }

    public function test_confirmar_cria_fornecedor_compra_itens_e_movimentacoes(): void
    {
        Perfil::factory()->create(['nome' => PerfilNome::ADMINISTRADOR->value]);

        $dto = (new ConfirmarImportacaoDTO())
            ->setDadosNota($this->dadosNotaComDoisItens())
            ->setItensSelecionadosIndices([0, 1]);

        $compra = app(ImportacaoNotaFiscalService::class)->confirmar($dto);

        $this->assertDatabaseHas('fornecedores', ['cnpj' => '11.222.333/0001-44']);
        $this->assertDatabaseCount('itens_compra', 2);
        $this->assertDatabaseCount('movimentacoes_estoque', 2);
        $this->assertSame(2, $compra->itens()->count());
    }

    public function test_nao_duplica_fornecedor_em_segunda_importacao(): void
    {
        Perfil::factory()->create(['nome' => PerfilNome::ADMINISTRADOR->value]);
        $service = app(ImportacaoNotaFiscalService::class);

        $service->confirmar(
            (new ConfirmarImportacaoDTO())->setDadosNota($this->dadosNotaComDoisItens())->setItensSelecionadosIndices([0]),
        );
        $service->confirmar(
            (new ConfirmarImportacaoDTO())->setDadosNota($this->dadosNotaComDoisItens())->setItensSelecionadosIndices([0]),
        );

        $this->assertSame(1, \App\Models\Fornecedor::where('cnpj', '11.222.333/0001-44')->count());
    }

    public function test_ingrediente_novo_sem_grupo_dispara_notificacao_de_pendencia(): void
    {
        Perfil::factory()->create(['nome' => PerfilNome::ADMINISTRADOR->value]);

        $dto = (new ConfirmarImportacaoDTO())
            ->setDadosNota($this->dadosNotaComDoisItens())
            ->setItensSelecionadosIndices([0]);

        app(ImportacaoNotaFiscalService::class)->confirmar($dto);

        $ingrediente = Ingrediente::where('codigo_fiscal', '111')->first();

        $this->assertNotNull($ingrediente);
        $this->assertNull($ingrediente->grupo_equivalencia_id);
        $this->assertDatabaseHas('notificacoes', [
            'tipo' => TipoNotificacao::INGREDIENTE_SEM_GRUPO->value,
            'referencia_tipo' => 'ingrediente',
            'referencia_id' => $ingrediente->id,
        ]);
    }

    public function test_reimportar_a_mesma_chave_de_acesso_e_bloqueada(): void
    {
        Perfil::factory()->create(['nome' => PerfilNome::ADMINISTRADOR->value]);
        $service = app(ImportacaoNotaFiscalService::class);
        $chave = str_repeat('9', 44);

        $service->confirmar(
            (new ConfirmarImportacaoDTO())->setDadosNota($this->dadosNotaComDoisItens($chave))->setItensSelecionadosIndices([0]),
        );

        $this->expectExceptionMessage('Esta nota já foi importada anteriormente.');

        $service->confirmar(
            (new ConfirmarImportacaoDTO())->setDadosNota($this->dadosNotaComDoisItens($chave))->setItensSelecionadosIndices([0]),
        );
    }

    public function test_itens_desmarcados_na_revisao_nao_geram_registro(): void
    {
        Perfil::factory()->create(['nome' => PerfilNome::ADMINISTRADOR->value]);

        $dto = (new ConfirmarImportacaoDTO())
            ->setDadosNota($this->dadosNotaComDoisItens())
            ->setItensSelecionadosIndices([0]);

        app(ImportacaoNotaFiscalService::class)->confirmar($dto);

        $this->assertDatabaseCount('itens_compra', 1);
        $this->assertDatabaseMissing('ingredientes', ['codigo_fiscal' => '222']);
    }

    public function test_itens_compra_grava_o_item_como_veio_na_nota_mesmo_com_ingrediente_ja_cadastrado_com_outro_nome(): void
    {
        Perfil::factory()->create(['nome' => PerfilNome::ADMINISTRADOR->value]);
        Ingrediente::factory()->create(['codigo_fiscal' => '111', 'nome' => 'Nome Cadastrado Diferente']);

        $dto = (new ConfirmarImportacaoDTO())
            ->setDadosNota($this->dadosNotaComDoisItens())
            ->setItensSelecionadosIndices([0]);

        app(ImportacaoNotaFiscalService::class)->confirmar($dto);

        $this->assertDatabaseHas('itens_compra', [
            'codigo_fiscal' => '111',
            'descricao_produto' => 'Cenoura',
        ]);
    }

    public function test_recalcula_custo_medio_ponderado_quando_ingrediente_tem_grupo(): void
    {
        Perfil::factory()->create(['nome' => PerfilNome::ADMINISTRADOR->value]);
        $grupo = GrupoEquivalencia::factory()->create(['custo_medio_ponderado' => 0]);
        Ingrediente::factory()->create(['codigo_fiscal' => '111', 'grupo_equivalencia_id' => $grupo->id]);

        $dto = (new ConfirmarImportacaoDTO())
            ->setDadosNota($this->dadosNotaComDoisItens())
            ->setItensSelecionadosIndices([0]);

        app(ImportacaoNotaFiscalService::class)->confirmar($dto);

        $this->assertEquals(10.0, $grupo->fresh()->custo_medio_ponderado);
    }
}
