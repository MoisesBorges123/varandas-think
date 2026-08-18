<?php

namespace App\Livewire\Estoque;

use App\DTO\NotaFiscal\CategoriaCompraDTO;
use App\Models\Fornecedor;
use App\Services\CategoriaCompraService;
use App\Services\CompraService;
use Livewire\Attributes\On;
use Livewire\Component;

class CompraIndex extends Component
{
    public string $dataDe = '';

    public string $dataAte = '';

    public string $fornecedorId = '';

    public string $categoriaCompraId = '';

    /** @var array<int, int|string> compra_id => categoria_compra_id selecionada (ou '' pra sem categoria) */
    public array $categoriaPorCompra = [];

    public string $novaCategoriaNome = '';

    public function limparFiltros(): void
    {
        $this->reset(['dataDe', 'dataAte', 'fornecedorId', 'categoriaCompraId']);
    }

    /**
     * Modal de detalhes via SweetAlert2 em vez de acordeão na própria
     * tabela — notas com muitos itens ficavam ilegíveis expandidas inline.
     */
    public function verDetalhes(int $compraId, CompraService $service): void
    {
        $compra = $service->encontrarComItens($compraId);

        $this->dispatch('swal', ...[
            'title' => 'Detalhes da compra #'.$compra->id,
            'message' => view('livewire.estoque.partials.compra-detalhes', ['compra' => $compra])->render(),
            'width' => '50em',
            'type' => 'info',
            'showCancelButton' => false,
            'confirmButtonText' => 'Fechar',
        ]);
    }

    public function criarCategoria(CategoriaCompraService $service): void
    {
        $this->validate([
            'novaCategoriaNome' => 'required|string|max:100',
        ]);

        $dto = CategoriaCompraDTO::fromLivewire($this);

        $service->criar($dto);

        $this->novaCategoriaNome = '';

        $this->dispatch('toastr', message: 'Categoria de compra criada.', type: 'success', title: 'Pronto');
    }

    public function atualizarCategoria(int $compraId, CompraService $service): void
    {
        $categoriaId = $this->categoriaPorCompra[$compraId] ?? '';

        $service->atualizarCategoria($compraId, $categoriaId !== '' ? (int) $categoriaId : null);

        $this->dispatch('toastr', message: 'Classificação atualizada.', type: 'success', title: 'Pronto');
    }

    public function confirmarExclusao(int $compraId): void
    {
        // "..." obrigatório — ver comentário equivalente em CategoriaIndex.
        $this->dispatch('swal', ...[
            'title' => 'Excluir compra?',
            'message' => 'O estoque gerado por essa compra será estornado automaticamente (lançamento de saída compensando a entrada). Essa ação não pode ser desfeita.',
            'type' => 'warning',
            'showCancelButton' => true,
            'confirmButtonText' => 'Excluir',
            'confirmEvent' => 'compra-excluir-confirmado',
            'confirmParams' => ['compraId' => $compraId],
        ]);
    }

    #[On('compra-excluir-confirmado')]
    public function excluir(int $compraId, CompraService $service): void
    {
        try {
            $service->excluir($compraId);

            $this->dispatch('toastr', message: 'Compra excluída e estoque estornado.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível excluir');
        }
    }

    public function render(CompraService $compraService, CategoriaCompraService $categoriaCompraService)
    {
        $compras = $compraService->listar([
            'data_de' => $this->dataDe ?: null,
            'data_ate' => $this->dataAte ?: null,
            'fornecedor_id' => $this->fornecedorId ?: null,
            'categoria_compra_id' => $this->categoriaCompraId ?: null,
        ]);

        foreach ($compras as $compra) {
            if (! array_key_exists($compra->id, $this->categoriaPorCompra)) {
                $this->categoriaPorCompra[$compra->id] = $compra->categoria_compra_id ?? '';
            }
        }

        return view('livewire.estoque.compra-index', [
            'compras' => $compras,
            'fornecedores' => Fornecedor::orderBy('razao_social')->get(),
            'categoriasCompra' => $categoriaCompraService->listar(),
        ]);
    }
}
