<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Comandas</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item active">Comandas</li>
            </ol>
        </div>
        <div class="page-rightheader">
            <a href="{{ route('comandas.abrir') }}" wire:navigate class="btn btn-primary">
                <i class="fe fe-plus mr-1"></i> Abrir comanda
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Filtros</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label class="small text-muted mb-1">Status</label>
                            <select wire:model.live="status" class="form-control">
                                <option value="">Todos</option>
                                <option value="aberta">Aberta</option>
                                <option value="fechada">Fechada</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label class="small text-muted mb-1">Mesa</label>
                            <select wire:model.live="mesaId" class="form-control">
                                <option value="">Todas</option>
                                @foreach ($mesas as $mesa)
                                    <option value="{{ $mesa->id }}">{{ $mesa->numero }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label class="small text-muted mb-1">Garçom</label>
                            <select wire:model.live="garcomId" class="form-control">
                                <option value="">Todos</option>
                                @foreach ($garcons as $garcom)
                                    <option value="{{ $garcom->id }}">{{ $garcom->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 d-flex align-items-end form-group">
                            <button type="button" wire:click="limparFiltros" class="btn btn-outline-secondary w-100">
                                <i class="fe fe-x mr-1"></i> Limpar filtros
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Comandas registradas</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th>Mesa</th>
                                <th>Tipo</th>
                                <th>Cliente</th>
                                <th>Garçom</th>
                                <th>Aberta em</th>
                                <th>Status</th>
                                <th class="text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($comandas as $comanda)
                                <tr wire:key="comanda-{{ $comanda->id }}">
                                    <td>{{ $comanda->mesa->numero }}</td>
                                    <td>{{ $comanda->tipo->label() }}</td>
                                    <td>{{ $comanda->cliente_nome ?? '—' }}</td>
                                    <td>
                                        <select wire:model="garcomPorComanda.{{ $comanda->id }}" wire:change="atribuirGarcom({{ $comanda->id }})" class="form-control form-control-sm" {{ $comanda->status->value === 'fechada' ? 'disabled' : '' }}>
                                            <option value="">Sem garçom</option>
                                            @foreach ($garcons as $garcom)
                                                <option value="{{ $garcom->id }}">{{ $garcom->nome }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>{{ $comanda->aberta_em->format('d/m/Y H:i') }}</td>
                                    <td>
                                        <span class="badge {{ $comanda->estaAberta() ? 'badge-success' : 'badge-secondary' }}">
                                            {{ $comanda->status->label() }}
                                        </span>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('comandas.itens', $comanda->id) }}" wire:navigate class="btn btn-sm btn-icon btn-primary" title="Ver itens">
                                            <i class="fe fe-list"></i>
                                        </a>
                                        @if ($comanda->estaAberta())
                                            <a href="{{ route('comandas.pagamento', $comanda->id) }}" wire:navigate class="btn btn-sm btn-icon btn-success" title="Pagamento">
                                                <i class="fe fe-credit-card"></i>
                                            </a>
                                        @endif
                                        <button type="button" wire:click="verDetalhes({{ $comanda->id }})" class="btn btn-sm btn-icon btn-secondary" title="Ver detalhes">
                                            <i class="fe fe-eye"></i>
                                        </button>
                                        @if ($comanda->estaAberta())
                                            <button type="button" wire:click="confirmarFechamento({{ $comanda->id }})" class="btn btn-sm btn-icon btn-danger" title="Fechar comanda">
                                                <i class="fe fe-lock"></i>
                                            </button>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted py-4">Nenhuma comanda encontrada.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
