<?php

namespace App\Services\NotaFiscal\Extratores;

use App\DTO\NotaFiscal\DadosNotaFiscalDTO;
use App\Enums\Estoque\FonteCompra;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Extrai os dados da tabela HTML do portal de consulta pública da Sefaz
 * (cupom fiscal eletrônico). Cobre o formato comum à maioria dos estados;
 * se algum estado divergir na prática, cria-se uma variante específica
 * implementando a mesma interface — não se constrói uma por estado sem
 * antes confirmar que o padrão realmente diverge (CLAUDE.md, decisão desta
 * feature).
 */
class ExtratorPadraoSefaz implements ExtratorCupomFiscal
{
    public function extrair(string $html, string $chaveAcesso): DadosNotaFiscalDTO
    {
        $crawler = new Crawler($html);

        $itens = $this->extrairItens($crawler);
        [$fornecedor, $compra] = $this->extrairFornecedorECompra($crawler);

        return (new DadosNotaFiscalDTO())
            ->setFornecedorCnpj($fornecedor['cnpj'] ?? null)
            ->setFornecedorRazaoSocial($fornecedor['nome'] ?? null)
            ->setFornecedorUf($fornecedor['uf'] ?? null)
            ->setChaveAcesso($chaveAcesso)
            ->setFonte(FonteCompra::SCRAPING_SEFAZ)
            ->setDataEmissao($compra['data_emissao'] ?? null)
            ->setDataCompra($compra['data_compra'] ?? now()->toDateString())
            ->setValorProdutos($compra['valor_total'] ?? 0)
            ->setValorIcmsBase($compra['icms_base'] ?? null)
            ->setValorIcms($compra['valor_icms'] ?? null)
            ->setValorTotal($compra['valor_total'] ?? 0)
            ->setHtmlBruto($html)
            ->setItens($itens);
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function extrairItens(Crawler $crawler): array
    {
        $celulas = $crawler->filter('table > tbody#myTable > tr > td');

        $itens = [];
        $indice = 0;
        $atual = [];

        foreach ($celulas as $celula) {
            $texto = $celula->textContent;

            switch ($indice) {
                case 0:
                    $nomeECodigo = $this->trataNomeProduto($texto);
                    $atual['descricao'] = $nomeECodigo['nome'];
                    $atual['codigo_fiscal'] = $nomeECodigo['codigo'];
                    break;
                case 1:
                    $atual['quantidade'] = $this->trataQtde($texto);
                    break;
                case 2:
                    $atual['unidade'] = $this->trataNameDefault($texto);
                    break;
                case 3:
                    $atual['valor_unitario'] = $this->trataValor($texto);
                    break;
            }

            $indice++;

            if ($indice === 4) {
                $indice = 0;
                // O cupom fiscal escaneado não expõe uma coluna separada de
                // valor total por item (só o unitário) — calculado aqui, ao
                // contrário do caminho de XML, onde vem literal da nota.
                $atual['valor_total_item'] = round($atual['quantidade'] * $atual['valor_unitario'], 2);
                $atual['ncm'] = null;
                $atual['cfop'] = null;
                $atual['cest'] = null;
                $itens[] = $atual;
                $atual = [];
            }
        }

        return $itens;
    }

    /**
     * @return array{0: array<string, string>, 1: array<string, mixed>}
     */
    private function extrairFornecedorECompra(Crawler $crawler): array
    {
        $celulas = $crawler->filter('div#collapse4 > table > tbody > tr > td');

        $fornecedor = [];
        $compra = [];
        $indice = 0;

        foreach ($celulas as $celula) {
            $texto = trim($celula->textContent);

            if ($indice <= 3) {
                match ($indice) {
                    0 => $fornecedor['nome'] = $texto,
                    1 => $fornecedor['cnpj'] = $texto,
                    2 => $fornecedor['inscricao_estadual'] = $texto,
                    3 => $fornecedor['uf'] = $texto,
                    default => null,
                };
            } else {
                if (str_contains($texto, '/')) {
                    [$dataEmissao] = $this->trataDataHora($texto);
                    $compra['data_emissao'] = $dataEmissao;
                    $compra['data_compra'] = substr($dataEmissao, 0, 10);
                }

                if (str_contains($texto, 'R$')) {
                    $valor = $this->trataValor($texto);

                    if (! isset($compra['valor_total'])) {
                        $compra['valor_total'] = $valor;
                    } elseif (! isset($compra['icms_base'])) {
                        $compra['icms_base'] = $valor;
                    } elseif (! isset($compra['valor_icms'])) {
                        $compra['valor_icms'] = $valor;
                    }
                }
            }

            $indice++;
        }

        return [$fornecedor, $compra];
    }

    /**
     * @return array{0: string} data/hora no formato "Y-m-d H:i:s"
     */
    private function trataDataHora(string $texto): array
    {
        $partesData = explode('/', $texto);
        $partesHora = explode(' ', $texto);

        $dia = trim($partesData[0] ?? '01');
        $mes = trim($partesData[1] ?? '01');
        $ano = substr(trim($partesData[2] ?? date('Y')), 0, 4);
        $hora = trim($partesHora[1] ?? '00:00:00');

        return ["{$ano}-{$mes}-{$dia} {$hora}"];
    }

    /**
     * @return array{nome: string, codigo: string}
     */
    private function trataNomeProduto(string $texto): array
    {
        $texto = str_replace(')', '', str_replace('(', '+', $texto));
        $partes = explode('+', $texto);

        return [
            'nome' => trim($partes[0] ?? ''),
            'codigo' => $this->trataNameDefault($partes[1] ?? ''),
        ];
    }

    private function trataQtde(string $texto): float
    {
        return (float) $this->trataNameDefault($texto);
    }

    private function trataValor(string $texto): float
    {
        if (str_contains($texto, ':')) {
            $texto = $this->trataNameDefault($texto);
        }

        return (float) str_replace(',', '.', trim(str_replace('R$', '', $texto)));
    }

    private function trataNameDefault(string $texto): string
    {
        $partes = explode(':', trim($texto));

        return trim($partes[1] ?? $partes[0]);
    }
}
