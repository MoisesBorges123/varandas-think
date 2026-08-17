<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Insumos</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item active">Estoque</li>
                <li class="breadcrumb-item active">Insumos</li>
            </ol>
        </div>
        <div class="page-rightheader">
            <a href="{{ route('estoque.grupos.index') }}" wire:navigate class="btn btn-outline-secondary">
                <i class="fe fe-layers mr-1"></i> Grupos de equivalência
            </a>
            <a href="{{ route('estoque.ingredientes.criar') }}" wire:navigate class="btn btn-primary">
                <i class="fe fe-plus mr-1"></i> Novo insumo
            </a>
        </div>
    </div>

    @if ($totalSemGrupo > 0)
        <div class="alert alert-warning d-flex justify-content-between align-items-center">
            <span>
                <i class="fe fe-alert-triangle mr-1"></i>
                {{ $totalSemGrupo }} {{ $totalSemGrupo === 1 ? 'insumo pendente' : 'insumos pendentes' }}
                de grupo de equivalência.
            </span>
            <button type="button" class="btn btn-sm btn-warning" wire:click="$set('apenasSemGrupo', true)">
                Ver pendentes
            </button>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex" style="gap: 1rem;">
                    <input type="text" wire:model.live.debounce.400ms="busca" class="form-control" placeholder="Buscar por nome...">
                    <label class="custom-control custom-checkbox text-nowrap d-flex align-items-center">
                        <input type="checkbox" wire:model.live="apenasSemGrupo" class="custom-control-input">
                        <span class="custom-control-label">Só sem grupo</span>
                    </label>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Unidade</th>
                                <th>Grupo de equivalência</th>
                                <th>Código fiscal</th>
                                <th class="text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($ingredientes as $ingrediente)
                                <tr wire:key="ingrediente-{{ $ingrediente->id }}">
                                    <td>{{ $ingrediente->nome }}</td>
                                    <td>{{ $ingrediente->unidade_medida }}</td>
                                    <td>
                                        @if ($ingrediente->grupoEquivalencia)
                                            {{ $ingrediente->grupoEquivalencia->nome }}
                                        @else
                                            <span class="badge badge-warning">Sem grupo</span>
                                        @endif
                                    </td>
                                    <td>{{ $ingrediente->codigo_fiscal ?: '—' }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('estoque.ingredientes.editar', $ingrediente) }}" wire:navigate class="btn btn-sm btn-icon btn-info" title="Editar">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                        <button type="button" wire:click="confirmarExclusao({{ $ingrediente->id }})" class="btn btn-sm btn-icon btn-danger" title="Excluir">
                                            <i class="fe fe-trash-2"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">Nenhum insumo cadastrado.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
