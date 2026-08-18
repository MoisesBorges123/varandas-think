<?php

namespace App\DTO\NotaFiscal;

use App\DTO\Base\DTOBase;
use App\Enums\Estoque\FonteCompra;

/**
 * Dados extraídos de uma nota (por scraping do portal da Sefaz ou por XML
 * estruturado) — formato comum aos dois caminhos, para a tela de revisão
 * não precisar saber qual foi a origem.
 *
 * `itens` é uma exceção pragmática ao padrão de setters campo-a-campo do
 * DTOBase (mesmo motivo do `ReceitaDTO`): é uma lista, não campos
 * escalares. Cada item: ['codigo_fiscal', 'descricao', 'ncm', 'cfop',
 * 'cest', 'unidade', 'quantidade', 'valor_unitario', 'valor_total_item'].
 */
class DadosNotaFiscalDTO extends DTOBase
{
    private ?string $fornecedorCnpj = null;

    private ?string $fornecedorRazaoSocial = null;

    private ?string $fornecedorUf = null;

    private ?string $chaveAcesso = null;

    private ?string $numeroNf = null;

    private ?string $serieNf = null;

    private ?FonteCompra $fonte = null;

    private ?string $dataEmissao = null;

    private ?string $dataCompra = null;

    private float $valorProdutos = 0;

    private float $valorDesconto = 0;

    private float $valorOutros = 0;

    private ?float $valorIcmsBase = null;

    private ?float $valorIcms = null;

    private float $valorTotal = 0;

    private ?string $xmlBruto = null;

    private ?string $htmlBruto = null;

    /** @var array<int, array<string, mixed>> */
    private array $itens = [];

    public function setFornecedorCnpj(?string $cnpj): self
    {
        $this->fornecedorCnpj = $cnpj;

        return $this;
    }

    public function getFornecedorCnpj(): ?string
    {
        return $this->fornecedorCnpj;
    }

    public function setFornecedorRazaoSocial(?string $razaoSocial): self
    {
        $this->fornecedorRazaoSocial = $razaoSocial;

        return $this;
    }

    public function getFornecedorRazaoSocial(): ?string
    {
        return $this->fornecedorRazaoSocial;
    }

    public function setFornecedorUf(?string $uf): self
    {
        $this->fornecedorUf = $uf;

        return $this;
    }

    public function getFornecedorUf(): ?string
    {
        return $this->fornecedorUf;
    }

    public function setChaveAcesso(?string $chaveAcesso): self
    {
        $this->chaveAcesso = $chaveAcesso;

        return $this;
    }

    public function getChaveAcesso(): ?string
    {
        return $this->chaveAcesso;
    }

    public function setNumeroNf(?string $numeroNf): self
    {
        $this->numeroNf = $numeroNf;

        return $this;
    }

    public function setSerieNf(?string $serieNf): self
    {
        $this->serieNf = $serieNf;

        return $this;
    }

    public function setFonte(FonteCompra|string|null $fonte): self
    {
        $this->fonte = is_string($fonte) ? FonteCompra::from($fonte) : $fonte;

        return $this;
    }

    public function getFonte(): ?FonteCompra
    {
        return $this->fonte;
    }

    public function setDataEmissao(?string $dataEmissao): self
    {
        $this->dataEmissao = $dataEmissao;

        return $this;
    }

    public function setDataCompra(?string $dataCompra): self
    {
        $this->dataCompra = $dataCompra;

        return $this;
    }

    public function getDataCompra(): ?string
    {
        return $this->dataCompra;
    }

    public function setValorProdutos(float $valor): self
    {
        $this->valorProdutos = $valor;

        return $this;
    }

    public function setValorDesconto(float $valor): self
    {
        $this->valorDesconto = $valor;

        return $this;
    }

    public function setValorOutros(float $valor): self
    {
        $this->valorOutros = $valor;

        return $this;
    }

    public function setValorIcmsBase(?float $valor): self
    {
        $this->valorIcmsBase = $valor;

        return $this;
    }

    public function setValorIcms(?float $valor): self
    {
        $this->valorIcms = $valor;

        return $this;
    }

    public function setValorTotal(float $valor): self
    {
        $this->valorTotal = $valor;

        return $this;
    }

    public function getValorTotal(): float
    {
        return $this->valorTotal;
    }

    public function setXmlBruto(?string $xml): self
    {
        $this->xmlBruto = $xml;

        return $this;
    }

    public function getXmlBruto(): ?string
    {
        return $this->xmlBruto;
    }

    public function setHtmlBruto(?string $html): self
    {
        $this->htmlBruto = $html;

        return $this;
    }

    public function getHtmlBruto(): ?string
    {
        return $this->htmlBruto;
    }

    public function setItens(array $itens): self
    {
        $this->itens = $itens;

        return $this;
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function toArray(): array
    {
        return [
            'fornecedor_cnpj' => $this->fornecedorCnpj,
            'fornecedor_razao_social' => $this->fornecedorRazaoSocial,
            'fornecedor_uf' => $this->fornecedorUf,
            'chave_acesso' => $this->chaveAcesso,
            'numero_nf' => $this->numeroNf,
            'serie_nf' => $this->serieNf,
            'fonte' => $this->fonte?->value,
            'data_emissao' => $this->dataEmissao,
            'data_compra' => $this->dataCompra,
            'valor_produtos' => $this->valorProdutos,
            'valor_desconto' => $this->valorDesconto,
            'valor_outros' => $this->valorOutros,
            'valor_icms_base' => $this->valorIcmsBase,
            'valor_icms' => $this->valorIcms,
            'valor_total' => $this->valorTotal,
            'xml_bruto' => $this->xmlBruto,
            'html_bruto' => $this->htmlBruto,
            'itens' => $this->itens,
        ];
    }

    public static function fromArray(array $dados): static
    {
        return (new static())
            ->setFornecedorCnpj($dados['fornecedor_cnpj'] ?? null)
            ->setFornecedorRazaoSocial($dados['fornecedor_razao_social'] ?? null)
            ->setFornecedorUf($dados['fornecedor_uf'] ?? null)
            ->setChaveAcesso($dados['chave_acesso'] ?? null)
            ->setNumeroNf($dados['numero_nf'] ?? null)
            ->setSerieNf($dados['serie_nf'] ?? null)
            ->setFonte($dados['fonte'] ?? null)
            ->setDataEmissao($dados['data_emissao'] ?? null)
            ->setDataCompra($dados['data_compra'] ?? null)
            ->setValorProdutos((float) ($dados['valor_produtos'] ?? 0))
            ->setValorDesconto((float) ($dados['valor_desconto'] ?? 0))
            ->setValorOutros((float) ($dados['valor_outros'] ?? 0))
            ->setValorIcmsBase(isset($dados['valor_icms_base']) ? (float) $dados['valor_icms_base'] : null)
            ->setValorIcms(isset($dados['valor_icms']) ? (float) $dados['valor_icms'] : null)
            ->setValorTotal((float) ($dados['valor_total'] ?? 0))
            ->setXmlBruto($dados['xml_bruto'] ?? null)
            ->setHtmlBruto($dados['html_bruto'] ?? null)
            ->setItens($dados['itens'] ?? []);
    }

    public function validate(): self
    {
        $this->assertPresente($this->fornecedorCnpj, 'fornecedor_cnpj');
        $this->assertPresente($this->chaveAcesso, 'chave_acesso');
        $this->assertPresente($this->fonte?->value, 'fonte');
        $this->assertPresente($this->dataCompra, 'data_compra');

        if (empty($this->itens)) {
            throw new \InvalidArgumentException('A nota não possui itens reconhecíveis.');
        }

        return $this;
    }
}
