<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Compras</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('estoque.ingredientes.index') }}" wire:navigate>Estoque</a></li>
                <li class="breadcrumb-item active">Compras</li>
            </ol>
        </div>
        <div class="page-rightheader">
            <a href="{{ route('estoque.notas-fiscais.importar') }}" wire:navigate class="btn btn-outline-secondary">
                <i class="fe fe-camera mr-1"></i> Importar nota fiscal
            </a>
            <a href="{{ route('estoque.compras.manual') }}" wire:navigate class="btn btn-primary">
                <i class="fe fe-plus mr-1"></i> Compra sem nota fiscal
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
                            <label class="small text-muted mb-1">Data de</label>
                            <input type="date" wire:model.live="dataDe" class="form-control">
                        </div>
                        <div class="col-md-3 form-group">
                            <label class="small text-muted mb-1">Data até</label>
                            <input type="date" wire:model.live="dataAte" class="form-control">
                        </div>
                        <div class="col-md-3 form-group">
                            <label class="small text-muted mb-1">Fornecedor</label>
                            <select wire:model.live="fornecedorId" class="form-control">
                                <option value="">Todos</option>
                                @foreach ($fornecedores as $fornecedor)
                                    <option value="{{ $fornecedor->id }}">{{ $fornecedor->razao_social }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label class="small text-muted mb-1">Categoria</label>
                            <select wire:model.live="categoriaCompraId" class="form-control">
                                <option value="">Todas</option>
                                <option value="sem_categoria">Sem categoria</option>
                                @foreach ($categoriasCompra as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="button" wire:click="limparFiltros" class="btn btn-outline-secondary btn-sm">
                            <i class="fe fe-x mr-1"></i> Limpar filtros
                        </button>
                    </div>

                    <hr>

                    <form wire:submit="criarCategoria" class="row align-items-end">
                        <div class="col-md-6 form-group mb-0">
                            <label class="small text-muted mb-1">Nova categoria de compra</label>
                            <div class="input-group">
                                <input type="text" wire:model="novaCategoriaNome" class="form-control" placeholder="ex: Bebidas, Hortifruti, Limpeza...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-outline-primary">
                                        <i class="fe fe-plus mr-1"></i> Adicionar
                                    </button>
                                </div>
                            </div>
                            @error('novaCategoriaNome')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Compras registradas</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Fornecedor</th>
                                <th>Origem</th>
                                <th>Categoria</th>
                                <th>Valor total</th>
                                <th>Status</th>
                                <th class="text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($compras as $compra)
                                <tr wire:key="compra-{{ $compra->id }}">
                                    <td>{{ $compra->data_compra->format('d/m/Y') }}</td>
                                    <td>{{ $compra->fornecedor->razao_social }}</td>
                                    <td>
                                        <span class="badge {{ $compra->fonte->value === 'manual' ? 'badge-warning' : 'badge-info' }}">
                                            {{ $compra->fonte->label() }}
                                        </span>
                                    </td>
                                    <td>
                                        <select wire:model="categoriaPorCompra.{{ $compra->id }}" wire:change="atualizarCategoria({{ $compra->id }})" class="form-control form-control-sm" {{ $compra->trashed() ? 'disabled' : '' }}>
                                            <option value="">Sem categoria</option>
                                            @foreach ($categoriasCompra as $categoria)
                                                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>R$ {{ number_format($compra->valor_total, 2, ',', '.') }}</td>
                                    <td>
                                        @if ($compra->trashed())
                                            <span class="badge badge-danger">Excluída</span>
                                        @else
                                            <span class="badge badge-success">Ativa</span>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <button type="button" wire:click="verDetalhes({{ $compra->id }})" class="btn btn-sm btn-icon btn-secondary" title="Ver detalhes">
                                            <i class="fe fe-eye"></i>
                                        </button>
                                        @unless ($compra->trashed())
                                            <button type="button" wire:click="confirmarExclusao({{ $compra->id }})" class="btn btn-sm btn-icon btn-danger" title="Excluir">
                                                <i class="fe fe-trash-2"></i>
                                            </button>
                                        @endunless
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted py-4">Nenhuma compra encontrada.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
