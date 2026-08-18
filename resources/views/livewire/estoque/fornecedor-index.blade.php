<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Fornecedores</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('estoque.ingredientes.index') }}" wire:navigate>Estoque</a></li>
                <li class="breadcrumb-item active">Fornecedores</li>
            </ol>
        </div>
        <div class="page-rightheader">
            <a href="{{ route('estoque.fornecedores.criar') }}" wire:navigate class="btn btn-primary">
                <i class="fe fe-plus mr-1"></i> Novo fornecedor
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <input type="text" wire:model.live.debounce.400ms="busca" class="form-control" placeholder="Buscar por razão social...">
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th>Razão social</th>
                                <th>Nome fantasia</th>
                                <th>CNPJ</th>
                                <th>UF</th>
                                <th class="text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($fornecedores as $fornecedor)
                                <tr wire:key="fornecedor-{{ $fornecedor->id }}">
                                    <td>{{ $fornecedor->razao_social }}</td>
                                    <td>{{ $fornecedor->nome_fantasia ?: '—' }}</td>
                                    <td>{{ $fornecedor->cnpj ?: '—' }}</td>
                                    <td>{{ $fornecedor->uf ?: '—' }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('estoque.fornecedores.editar', $fornecedor) }}" wire:navigate class="btn btn-sm btn-icon btn-info" title="Editar">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                        <button type="button" wire:click="confirmarExclusao({{ $fornecedor->id }})" class="btn btn-sm btn-icon btn-danger" title="Excluir">
                                            <i class="fe fe-trash-2"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">Nenhum fornecedor cadastrado.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
