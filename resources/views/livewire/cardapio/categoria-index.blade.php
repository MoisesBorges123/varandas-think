<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Categorias</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('cardapio.produtos.index') }}" wire:navigate>Cardápio</a></li>
                <li class="breadcrumb-item active">Categorias</li>
            </ol>
        </div>
        <div class="page-rightheader">
            <a href="{{ route('cardapio.categorias.criar') }}" wire:navigate class="btn btn-primary">
                <i class="fe fe-plus mr-1"></i> Nova categoria
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <input type="text" wire:model.live.debounce.400ms="busca" class="form-control" placeholder="Buscar por nome...">
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Destino de impressão</th>
                                <th>Status</th>
                                <th class="text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categorias as $categoria)
                                <tr wire:key="categoria-{{ $categoria->id }}">
                                    <td>{{ $categoria->nome }}</td>
                                    <td>{{ $categoria->destino_impressao->label() }}</td>
                                    <td>
                                        <span class="badge {{ $categoria->ativo ? 'badge-success' : 'badge-secondary' }}">
                                            {{ $categoria->ativo ? 'Ativa' : 'Inativa' }}
                                        </span>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('cardapio.categorias.editar', $categoria) }}" wire:navigate class="btn btn-sm btn-icon btn-info" title="Editar">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                        <button type="button" wire:click="alternarAtivo({{ $categoria->id }})" class="btn btn-sm btn-icon btn-warning" title="Ativar/Inativar">
                                            <i class="fe fe-power"></i>
                                        </button>
                                        <button type="button" wire:click="confirmarExclusao({{ $categoria->id }})" class="btn btn-sm btn-icon btn-danger" title="Excluir">
                                            <i class="fe fe-trash-2"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted py-4">Nenhuma categoria cadastrada.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
