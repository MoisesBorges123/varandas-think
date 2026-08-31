<?php

namespace App\Livewire\Comanda;

use App\DTO\Comanda\ConfiguracaoDTO;
use App\Services\ConfiguracaoService;
use App\Services\Pagamento\Gateway\MercadoPagoGatewayInterface;
use Illuminate\Http\Client\RequestException;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ConfiguracaoForm extends Component
{
    #[Validate('required|numeric')]
    public string $latitude = '';

    #[Validate('required|numeric')]
    public string $longitude = '';

    #[Validate('required|integer|min:1')]
    public string $raioMetros = '';

    public bool $validacaoEstoqueAutomaticaAtiva = false;

    public bool $permitirGarcomCancelarItemColega = false;

    public bool $permitirGarcomExcluirProprioItem = true;

    public bool $permitirGarcomExcluirItemColega = false;

    public string $mpDeviceIdBalcao = '';

    public string $mpDeviceIdPortatil = '';

    /** @var array<int, array{id: string, pos_id: ?int, store_id: ?int, operating_mode: ?string}> */
    public array $terminaisDisponiveis = [];

    public bool $buscandoTerminais = false;

    public bool $jaBuscouTerminais = false;

    public ?string $erroTerminais = null;

    public function mount(ConfiguracaoService $service): void
    {
        $configuracao = $service->obter();

        if ($configuracao) {
            $this->latitude = (string) $configuracao->bar_latitude;
            $this->longitude = (string) $configuracao->bar_longitude;
            $this->raioMetros = (string) $configuracao->raio_metros;
            $this->validacaoEstoqueAutomaticaAtiva = (bool) $configuracao->validacao_estoque_automatica_ativa;
            $this->permitirGarcomCancelarItemColega = (bool) $configuracao->permitir_garcom_cancelar_item_colega;
            $this->permitirGarcomExcluirProprioItem = (bool) $configuracao->permitir_garcom_excluir_proprio_item;
            $this->permitirGarcomExcluirItemColega = (bool) $configuracao->permitir_garcom_excluir_item_colega;
            $this->mpDeviceIdBalcao = (string) ($configuracao->mp_device_id_balcao ?? '');
            $this->mpDeviceIdPortatil = (string) ($configuracao->mp_device_id_portatil ?? '');
        }
    }

    /**
     * Busca os terminais Point vinculados à conta configurada
     * (CLAUDE.md seção 6) — chamada real à API do Mercado Pago, então
     * nunca deixa quebrar a tela: sem credencial configurada ou com a
     * API fora do ar, só mostra um aviso e mantém os campos manuais
     * funcionando normalmente.
     */
    public function atualizarTerminais(MercadoPagoGatewayInterface $gateway): void
    {
        $this->buscandoTerminais = true;
        $this->erroTerminais = null;

        try {
            $this->terminaisDisponiveis = $gateway->listarTerminais();
        } catch (RequestException|\Throwable $e) {
            $this->terminaisDisponiveis = [];
            $this->erroTerminais = 'Não foi possível consultar as maquininhas agora. Você ainda pode preencher o identificador manualmente.';
        } finally {
            $this->buscandoTerminais = false;
            $this->jaBuscouTerminais = true;
        }
    }

    public function selecionarTerminalBalcao(string $terminalId): void
    {
        $this->mpDeviceIdBalcao = $terminalId;
    }

    public function selecionarTerminalPortatil(string $terminalId): void
    {
        $this->mpDeviceIdPortatil = $terminalId;
    }

    public function salvar(ConfiguracaoService $service): void
    {
        $this->validate();

        $dto = ConfiguracaoDTO::fromLivewire($this);

        $service->atualizar($dto);

        $this->dispatch('toastr', message: 'Configuração salva com sucesso.', type: 'success', title: 'Pronto');
    }

    public function render()
    {
        return view('livewire.comanda.configuracao-form');
    }
}
