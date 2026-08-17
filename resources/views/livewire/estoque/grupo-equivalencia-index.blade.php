<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Grupos de equivalência</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('estoque.ingredientes.index') }}" wire:navigate>Estoque</a></li>
                <li class="breadcrumb-item active">Grupos de equivalência</li>
            </ol>
        </div>
        <div class="page-rightheader">
            <a href="{{ route('estoque.grupos.criar') }}" wire:navigate class="btn btn-primary">
                <i class="fe fe-plus mr-1"></i> Novo grupo
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
                                <th>Custo médio ponderado</th>
                                <th class="text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($grupos as $grupo)
                                <tr wire:key="grupo-{{ $grupo->id }}">
                                    <td>{{ $grupo->nome }}</td>
                                    <td>R$ {{ number_format($grupo->custo_medio_ponderado, 4, ',', '.') }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('estoque.grupos.editar', $grupo) }}" wire:navigate class="btn btn-sm btn-icon btn-info" title="Editar">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                        <button type="button" wire:click="confirmarExclusao({{ $grupo->id }})" class="btn btn-sm btn-icon btn-danger" title="Excluir">
                                            <i class="fe fe-trash-2"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted py-4">Nenhum grupo de equivalência cadastrado.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
