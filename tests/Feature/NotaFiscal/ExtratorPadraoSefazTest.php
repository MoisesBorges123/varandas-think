<?php

namespace Tests\Feature\NotaFiscal;

use App\Enums\Estoque\FonteCompra;
use App\Services\NotaFiscal\Extratores\ExtratorPadraoSefaz;
use Tests\TestCase;

class ExtratorPadraoSefazTest extends TestCase
{
    public function test_extrai_itens_fornecedor_e_totais_do_html_do_portal(): void
    {
        $html = file_get_contents(base_path('tests/Fixtures/cupom-fiscal-sefaz.html'));

        $dados = (new ExtratorPadraoSefaz())->extrair($html, '12345678901234567890123456789012345678901234');

        $this->assertSame('Fornecedor Teste LTDA', $dados->getFornecedorRazaoSocial());
        $this->assertSame('12.345.678/0001-90', $dados->getFornecedorCnpj());
        $this->assertSame(FonteCompra::SCRAPING_SEFAZ, $dados->getFonte());

        $itens = $dados->getItens();
        $this->assertCount(2, $itens);

        $this->assertSame('CENOURA KG', $itens[0]['descricao']);
        $this->assertSame('7891234567890', $itens[0]['codigo_fiscal']);
        $this->assertSame(2.0, $itens[0]['quantidade']);
        $this->assertSame('KG', $itens[0]['unidade']);
        $this->assertSame(5.5, $itens[0]['valor_unitario']);
        $this->assertSame(11.0, $itens[0]['valor_total_item']);

        $this->assertSame('ARROZ 5KG', $itens[1]['descricao']);
        $this->assertSame(1.0, $itens[1]['quantidade']);
        $this->assertSame(22.9, $itens[1]['valor_unitario']);
    }
}
