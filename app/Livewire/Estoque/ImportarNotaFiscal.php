<?php

namespace App\Livewire\Estoque;

use App\DTO\NotaFiscal\ConfirmarImportacaoDTO;
use App\Services\NotaFiscal\ImportacaoNotaFiscalService;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImportarNotaFiscal extends Component
{
    use WithFileUploads;

    public string $secao = 'leitura';

    public string $aba = 'camera';

    #[Validate('required|digits:44')]
    public string $chaveManual = '';

    #[Validate('required|file|mimetypes:text/xml,application/xml')]
    public $xmlFile = null;

    /** @var array<string, mixed> guarda o DTO como array — Livewire não serializa objetos DTO */
    public array $dadosNota = [];

    /** @var array<int, int> */
    public array $itensSelecionados = [];

    public function selecionarAba(string $aba): void
    {
        $this->aba = $aba;
    }

    /**
     * Chamado direto do JS (bridge da câmera) quando o scanner
     * (html5-qrcode) decodifica um QR code ou código de barras — decide
     * sozinho se é a URL de um cupom fiscal ou a chave de acesso de uma
     * DANFE (44 dígitos), sem perguntar nada ao usuário.
     */
    #[On('leitura-realizada')]
    public function leituraRealizada(string $texto, ImportacaoNotaFiscalService $service): void
    {
        $texto = trim($texto);

        if (filter_var($texto, FILTER_VALIDATE_URL)) {
            try {
                $dados = $service->buscarPorQrCode($texto);
                $this->prepararRevisao($dados->toArray());
            } catch (\Exception $e) {
                $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível buscar a nota');
            }

            return;
        }

        $chave = preg_replace('/\D/', '', $texto) ?? '';

        if (preg_match('/^\d{44}$/', $chave)) {
            $this->buscarPorChave($chave, $service);

            return;
        }

        $this->dispatch('toastr', message: 'Não foi possível identificar o código lido.', type: 'warning', title: 'Ops');
    }

    public function buscarPorChaveManual(ImportacaoNotaFiscalService $service): void
    {
        $this->validateOnly('chaveManual');

        $this->buscarPorChave($this->chaveManual, $service);
    }

    /**
     * A consulta pública de NF-e de fornecedor (portal nacional) exige
     * confirmação humana (Cloudflare Turnstile) — não dá pra automatizar
     * sem burlar essa proteção, o que não fazemos. Quando a busca não traz
     * itens reconhecíveis (é exatamente o que acontece quando cai na
     * página do captcha em vez da nota), a saída é pedir o XML — caminho
     * que já funciona de verdade e não depende de terceiro nenhum.
     */
    private function buscarPorChave(string $chave, ImportacaoNotaFiscalService $service): void
    {
        try {
            $dados = $service->buscarPorChaveAcesso($chave);
            $this->prepararRevisao($dados->toArray());
        } catch (\Exception) {
            $this->aba = 'xml';
            $this->dispatch(
                'toastr',
                message: 'Não conseguimos buscar essa nota automaticamente (a consulta oficial de NF-e de fornecedor exige confirmação humana). Envie o arquivo XML da nota para continuar.',
                type: 'info',
                title: 'Busca automática indisponível',
            );
        }
    }

    public function enviarXml(ImportacaoNotaFiscalService $service): void
    {
        $this->validateOnly('xmlFile');

        try {
            $dados = $service->importarXml($this->xmlFile);
            $this->prepararRevisao($dados->toArray());
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível ler o XML');
        }
    }

    public function voltarParaLeitura(): void
    {
        $this->secao = 'leitura';
        $this->dadosNota = [];
        $this->itensSelecionados = [];
    }

    public function confirmarImportacao(ImportacaoNotaFiscalService $service): void
    {
        try {
            $dto = ConfirmarImportacaoDTO::fromLivewire($this);
            $service->confirmar($dto);

            $this->dispatch('toastr', message: 'Nota fiscal importada com sucesso.', type: 'success', title: 'Pronto');

            $this->redirect(route('estoque.compras.index'), navigate: false);
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível importar a nota');
        }
    }

    private function prepararRevisao(array $dadosNota): void
    {
        $this->dadosNota = $dadosNota;
        $this->itensSelecionados = array_keys($dadosNota['itens'] ?? []);
        $this->secao = 'revisao';
    }

    public function render()
    {
        return view('livewire.estoque.importar-nota-fiscal');
    }
}
