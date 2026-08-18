<?php

namespace Tests\Feature\NotaFiscal;

use App\Enums\Estoque\FonteCompra;
use App\Services\NotaFiscal\ImportadorXmlNotaFiscal;
use Tests\TestCase;

class ImportadorXmlNotaFiscalTest extends TestCase
{
    public function test_importa_dados_estruturados_do_xml_da_nfe(): void
    {
        $xml = file_get_contents(base_path('tests/Fixtures/nfe-exemplo.xml'));

        $dados = (new ImportadorXmlNotaFiscal())->importar($xml);

        $this->assertSame('31240811222333000144550010000012345123456789', $dados->getChaveAcesso());
        $this->assertSame('Distribuidora Exemplo LTDA', $dados->getFornecedorRazaoSocial());
        $this->assertSame('11222333000144', $dados->getFornecedorCnpj());
        $this->assertSame('MG', $dados->getFornecedorUf());
        $this->assertSame(FonteCompra::XML, $dados->getFonte());
        $this->assertSame(169.5, $dados->getValorTotal());

        $itens = $dados->getItens();
        $this->assertCount(2, $itens);

        $this->assertSame('7891234567890', $itens[0]['codigo_fiscal']);
        $this->assertSame('CENOURA KG', $itens[0]['descricao']);
        $this->assertSame('07061000', $itens[0]['ncm']);
        $this->assertSame('5102', $itens[0]['cfop']);
        $this->assertSame(10.0, $itens[0]['quantidade']);
        $this->assertSame(55.0, $itens[0]['valor_total_item']);
    }
}
