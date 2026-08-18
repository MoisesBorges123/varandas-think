<?php

namespace App\Livewire\Estoque;

use App\DTO\NotaFiscal\FornecedorDTO;
use App\Models\Fornecedor;
use App\Services\FornecedorService;
use Livewire\Attributes\Validate;
use Livewire\Component;

class FornecedorForm extends Component
{
    public ?Fornecedor $fornecedor = null;

    public string $cnpj = '';

    #[Validate('required|string|max:150')]
    public string $razaoSocial = '';

    public string $nomeFantasia = '';

    public string $uf = '';

    public function mount(?Fornecedor $fornecedor = null): void
    {
        if ($fornecedor?->exists) {
            $this->fornecedor = $fornecedor;
            $this->cnpj = (string) $fornecedor->cnpj;
            $this->razaoSocial = $fornecedor->razao_social;
            $this->nomeFantasia = (string) $fornecedor->nome_fantasia;
            $this->uf = (string) $fornecedor->uf;
        }
    }

    public function salvar(FornecedorService $service): void
    {
        $this->validate([
            'razaoSocial' => 'required|string|max:150',
            'cnpj' => 'nullable|string|max:18|unique:fornecedores,cnpj,'.($this->fornecedor?->id ?? 'NULL').',id',
            'uf' => 'nullable|string|max:2',
        ]);

        $dto = FornecedorDTO::fromLivewire($this);

        if ($this->fornecedor) {
            $service->atualizar($this->fornecedor->id, $dto);
        } else {
            $service->criar($dto);
        }

        $this->dispatch('toastr', message: 'Fornecedor salvo com sucesso.', type: 'success', title: 'Pronto');

        $this->redirect(route('estoque.fornecedores.index'), navigate: false);
    }

    public function render()
    {
        return view('livewire.estoque.fornecedor-form');
    }
}
