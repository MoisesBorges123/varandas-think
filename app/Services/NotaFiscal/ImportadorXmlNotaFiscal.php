<?php

namespace App\Services\NotaFiscal;

use App\DTO\NotaFiscal\DadosNotaFiscalDTO;
use App\Enums\Estoque\FonteCompra;
use DOMDocument;

/**
 * Parser do XML oficial da NF-e/NFC-e (DOMDocument puro, sem dependência
 * externa) — mais confiável que o scraping de HTML porque lê as tags
 * estruturadas da nota, incluindo classificação fiscal (NCM/CFOP/CEST) que
 * o cupom fiscal escaneado não expõe.
 */
class ImportadorXmlNotaFiscal
{
    public function importar(string $conteudoXml): DadosNotaFiscalDTO
    {
        $doc = new DOMDocument();
        $doc->loadXML($conteudoXml, LIBXML_NOBLANKS | LIBXML_NOEMPTYTAG);

        $chaveAcesso = $this->extrairChaveAcesso($doc);
        $emitente = $this->extrairEmitente($doc);
        $identificacao = $this->extrairIdentificacao($doc);
        $totais = $this->extrairTotais($doc);
        $itens = $this->extrairItens($doc);

        return (new DadosNotaFiscalDTO())
            ->setFornecedorCnpj($emitente['cnpj'] ?? null)
            ->setFornecedorRazaoSocial($emitente['nome'] ?? null)
            ->setFornecedorUf($emitente['uf'] ?? null)
            ->setChaveAcesso($chaveAcesso)
            ->setNumeroNf($identificacao['numero'] ?? null)
            ->setSerieNf($identificacao['serie'] ?? null)
            ->setFonte(FonteCompra::XML)
            ->setDataEmissao($identificacao['data_emissao'] ?? null)
            ->setDataCompra($identificacao['data_emissao'] ? substr($identificacao['data_emissao'], 0, 10) : now()->toDateString())
            ->setValorProdutos($totais['valor_produtos'] ?? 0)
            ->setValorDesconto($totais['valor_desconto'] ?? 0)
            ->setValorOutros($totais['valor_outros'] ?? 0)
            ->setValorTotal($totais['valor_total'] ?? 0)
            ->setXmlBruto($conteudoXml)
            ->setItens($itens);
    }

    private function extrairChaveAcesso(DOMDocument $doc): ?string
    {
        $node = $doc->getElementsByTagName('infProt')->item(0);

        return $node ? $this->valorTag($node, 'chNFe') : null;
    }

    /**
     * @return array<string, string|null>
     */
    private function extrairIdentificacao(DOMDocument $doc): array
    {
        $node = $doc->getElementsByTagName('ide')->item(0);

        if (! $node) {
            return [];
        }

        return [
            'numero' => $this->valorTag($node, 'nNF'),
            'serie' => $this->valorTag($node, 'serie'),
            'data_emissao' => $this->normalizarDataHora($this->valorTag($node, 'dhEmi')),
        ];
    }

    /**
     * @return array<string, string|null>
     */
    private function extrairEmitente(DOMDocument $doc): array
    {
        $node = $doc->getElementsByTagName('emit')->item(0);

        if (! $node) {
            return [];
        }

        $endereco = $node->getElementsByTagName('enderEmit')->item(0);

        return [
            'nome' => $this->valorTag($node, 'xNome'),
            'cnpj' => $this->valorTag($node, 'CNPJ'),
            'uf' => $endereco ? $this->valorTag($endereco, 'UF') : null,
        ];
    }

    /**
     * @return array<string, float>
     */
    private function extrairTotais(DOMDocument $doc): array
    {
        $node = $doc->getElementsByTagName('ICMSTot')->item(0);

        if (! $node) {
            return [];
        }

        return [
            'valor_produtos' => (float) $this->valorTag($node, 'vProd'),
            'valor_desconto' => (float) $this->valorTag($node, 'vDesc'),
            'valor_outros' => (float) $this->valorTag($node, 'vOutro'),
            'valor_total' => (float) $this->valorTag($node, 'vNF'),
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function extrairItens(DOMDocument $doc): array
    {
        $itens = [];

        foreach ($doc->getElementsByTagName('det') as $det) {
            $prod = $det->getElementsByTagName('prod')->item(0);

            if (! $prod) {
                continue;
            }

            $itens[] = [
                'codigo_fiscal' => $this->valorTag($prod, 'cProd'),
                'descricao' => $this->valorTag($prod, 'xProd'),
                'ncm' => $this->valorTag($prod, 'NCM'),
                'cfop' => $this->valorTag($prod, 'CFOP'),
                'cest' => $this->valorTag($prod, 'CEST'),
                'unidade' => $this->valorTag($prod, 'uCom'),
                'quantidade' => (float) $this->valorTag($prod, 'qCom'),
                'valor_unitario' => (float) $this->valorTag($prod, 'vUnCom'),
                'valor_total_item' => (float) $this->valorTag($prod, 'vProd'),
            ];
        }

        return $itens;
    }

    private function valorTag(\DOMNode $node, string $tag): ?string
    {
        if (! $node instanceof \DOMElement) {
            return null;
        }

        $elemento = $node->getElementsByTagName($tag)->item(0);

        return $elemento?->nodeValue;
    }

    private function normalizarDataHora(?string $dataHoraIso): ?string
    {
        if (! $dataHoraIso) {
            return null;
        }

        try {
            return (new \DateTime($dataHoraIso))->format('Y-m-d H:i:s');
        } catch (\Exception) {
            return null;
        }
    }
}
