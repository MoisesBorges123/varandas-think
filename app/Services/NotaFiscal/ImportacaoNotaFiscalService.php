<?php

namespace App\Services\NotaFiscal;

use App\DTO\NotaFiscal\ConfirmarImportacaoDTO;
use App\DTO\NotaFiscal\DadosNotaFiscalDTO;
use App\Enums\Estoque\OrigemMovimentacao;
use App\Models\Compra;
use App\Repositories\Contracts\CompraRepositoryInterface;
use App\Repositories\Contracts\GrupoEquivalenciaRepositoryInterface;
use App\Repositories\Contracts\MovimentacaoEstoqueRepositoryInterface;
use App\Services\Base\ServiceBase;
use App\Services\FornecedorService;
use App\Services\IngredienteService;
use App\Services\NotaFiscal\Extratores\ExtratorCupomFiscal;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImportacaoNotaFiscalService extends ServiceBase
{
    public function __construct(
        private readonly BuscadorNotaFiscalService $buscador,
        private readonly ExtratorCupomFiscal $extrator,
        private readonly ImportadorXmlNotaFiscal $importadorXml,
        private readonly FornecedorService $fornecedorService,
        private readonly IngredienteService $ingredienteService,
        private readonly GrupoEquivalenciaRepositoryInterface $grupoRepository,
        private readonly CompraRepositoryInterface $compraRepository,
        private readonly MovimentacaoEstoqueRepositoryInterface $movimentacaoRepository,
    ) {
    }

    /**
     * Leitura de QR code de cupom fiscal (NFC-e) — a URL já aponta direto
     * para o portal da Sefaz.
     */
    public function buscarPorQrCode(string $url): DadosNotaFiscalDTO
    {
        $chaveAcesso = $this->extrairChaveDaUrl($url);
        $html = $this->buscador->buscarPorUrl($url);

        return $this->extrairOuFalhar($html, $chaveAcesso);
    }

    /**
     * Leitura de código de barras de DANFE (NF-e) ou chave digitada
     * manualmente. A consulta pública de NF-e é no portal nacional, que
     * exige confirmação humana (captcha) — quando cai nessa página em vez
     * da nota, a extração não encontra itens, e é isso que usamos aqui
     * para detectar a falha e sinalizar pro chamador (ImportarNotaFiscal
     * cai para o upload de XML nesse caso).
     */
    public function buscarPorChaveAcesso(string $chaveAcesso): DadosNotaFiscalDTO
    {
        $html = $this->buscador->buscarPorChaveAcesso($chaveAcesso);

        return $this->extrairOuFalhar($html, $chaveAcesso);
    }

    private function extrairOuFalhar(string $html, string $chaveAcesso): DadosNotaFiscalDTO
    {
        $dados = $this->extrator->extrair($html, $chaveAcesso);

        $this->throwIf(
            empty($dados->getItens()),
            'Não foi possível reconhecer os itens da nota nessa consulta.',
        );

        return $dados;
    }

    public function importarXml(UploadedFile $arquivo): DadosNotaFiscalDTO
    {
        return $this->importadorXml->importar($arquivo->get());
    }

    /**
     * Grava fornecedor + compra + itens + movimentações de estoque, tudo
     * em transação. É aqui que mora a regra de negócio real (CLAUDE.md,
     * seção 7): find-or-create de fornecedor e insumo, bloqueio de
     * reimportação pela chave de acesso, e o "espelho" da nota gravado
     * como veio, item a item.
     */
    public function confirmar(ConfirmarImportacaoDTO $dto): Compra
    {
        $dto->validate();
        $dadosNota = $dto->getDadosNota();

        $this->throwIf(
            $this->compraRepository->existeChaveAcesso($dadosNota->getChaveAcesso()),
            'Esta nota já foi importada anteriormente.',
        );

        return $this->transaction(function () use ($dto, $dadosNota) {
            $fornecedor = $this->fornecedorService->encontrarOuCriarPorCnpj(
                $dadosNota->getFornecedorCnpj(),
                $dadosNota->getFornecedorRazaoSocial() ?? 'Fornecedor não identificado',
                $dadosNota->getFornecedorUf(),
            );

            $caminhoArquivo = $this->salvarDocumentoBruto($dadosNota);

            $itensParaGravar = [];
            $gruposParaRecalcular = [];
            $todosItens = $dadosNota->getItens();

            foreach ($dto->getItensSelecionadosIndices() as $indice) {
                if (! isset($todosItens[$indice])) {
                    continue;
                }

                $item = $todosItens[$indice];

                $ingrediente = $this->ingredienteService->encontrarOuCriarPorCodigoFiscal(
                    $item['codigo_fiscal'],
                    $item['descricao'],
                    $item['unidade'],
                );

                if ($ingrediente->grupo_equivalencia_id) {
                    $gruposParaRecalcular[$ingrediente->grupo_equivalencia_id] = true;
                }

                $itensParaGravar[] = [
                    'ingrediente_id' => $ingrediente->id,
                    'codigo_fiscal' => $item['codigo_fiscal'],
                    'descricao_produto' => $item['descricao'],
                    'ncm' => $item['ncm'] ?? null,
                    'cfop' => $item['cfop'] ?? null,
                    'cest' => $item['cest'] ?? null,
                    'quantidade' => $item['quantidade'],
                    'unidade' => $item['unidade'],
                    'preco_unitario' => $item['valor_unitario'],
                    'valor_total_item' => $item['valor_total_item'],
                ];
            }

            $compra = $this->compraRepository->criarComItens([
                'fornecedor_id' => $fornecedor->id,
                'chave_acesso_nf' => $dadosNota->getChaveAcesso(),
                'numero_nf' => null,
                'serie_nf' => null,
                'xml_path' => $caminhoArquivo,
                'fonte' => $dadosNota->getFonte()->value,
                'data_compra' => $dadosNota->getDataCompra(),
                'valor_produtos' => $dadosNota->getValorTotal(),
                'valor_total' => $dadosNota->getValorTotal(),
                'created_by' => $dto->getCreatedBy(),
            ], $itensParaGravar);

            foreach ($itensParaGravar as $item) {
                $this->movimentacaoRepository->registrarEntrada(
                    $item['ingrediente_id'],
                    (float) $item['quantidade'],
                    OrigemMovimentacao::COMPRA->value,
                    $compra->id,
                    $dto->getCreatedBy(),
                );
            }

            foreach (array_keys($gruposParaRecalcular) as $grupoId) {
                $this->grupoRepository->recalcularCustoMedioPonderado($grupoId);
            }

            return $compra;
        });
    }

    private function extrairChaveDaUrl(string $url): string
    {
        parse_str((string) parse_url($url, PHP_URL_QUERY), $parametros);
        $bruto = $parametros['p'] ?? '';
        $chave = explode('|', (string) $bruto)[0] ?? '';
        $chave = preg_replace('/\D/', '', $chave) ?? '';

        return $chave !== '' ? $chave : substr(md5($url), 0, 44);
    }

    /**
     * Salva o "espelho" bruto da nota (XML oficial ou HTML do portal
     * escaneado) no sistema de arquivos — CLAUDE.md seção 7: "o registro
     * da compra no banco guarda apenas a referência/caminho".
     */
    private function salvarDocumentoBruto(DadosNotaFiscalDTO $dadosNota): ?string
    {
        $conteudo = $dadosNota->getXmlBruto() ?? $dadosNota->getHtmlBruto();

        if (! $conteudo) {
            return null;
        }

        $extensao = $dadosNota->getXmlBruto() ? 'xml' : 'html';
        $caminho = "notas-fiscais/{$dadosNota->getChaveAcesso()}.{$extensao}";

        Storage::disk('local')->put($caminho, $conteudo);

        return $caminho;
    }
}
