<?php

namespace App\Livewire\Comanda;

use App\DTO\Comanda\ConfiguracaoDTO;
use App\Services\ConfiguracaoService;
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
        }
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
