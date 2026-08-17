<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Produtos</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}">Painel</a></li>
                <li class="breadcrumb-item active">Cardápio</li>
                <li class="breadcrumb-item active">Produtos</li>
            </ol>
        </div>
        <div class="page-rightheader">
            <a href="{{ route('cardapio.categorias.index') }}" class="btn btn-outline-secondary">
                <i class="fe fe-list mr-1"></i> Categorias
            </a>
            <a href="{{ route('cardapio.produtos.criar') }}" class="btn btn-primary">
                <i class="fe fe-plus mr-1"></i> Novo produto
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
                                <th>Categoria</th>
                                <th>Tipo</th>
                                <th>Preço atual</th>
                                <th>Status</th>
                                <th class="text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($produtos as $produto)
                                <tr wire:key="produto-{{ $produto->id }}">
                                    <td>{{ $produto->nome }}</td>
                                    <td>{{ $produto->categoria->nome }}</td>
                                    <td>{{ $produto->tipo->label() }}</td>
                                    <td>
                                        {{ $produto->precoAtual ? 'R$ ' . number_format($produto->precoAtual->preco, 2, ',', '.') : '—' }}
                                    </td>
                                    <td>
                                        <span class="badge {{ $produto->ativo ? 'badge-success' : 'badge-secondary' }}">
                                            {{ $produto->ativo ? 'Ativo' : 'Inativo' }}
                                        </span>
                                        <span class="badge {{ $produto->disponivel ? 'badge-info' : 'badge-warning' }}">
                                            {{ $produto->disponivel ? 'Disponível' : 'Indisponível' }}
                                        </span>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('cardapio.produtos.editar', $produto) }}" class="btn btn-sm btn-icon btn-info" title="Editar">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                        <button type="button" wire:click="alternarDisponivel({{ $produto->id }})" class="btn btn-sm btn-icon btn-warning" title="Disponível/Indisponível">
                                            <i class="fe fe-toggle-left"></i>
                                        </button>
                                        <button type="button" wire:click="alternarAtivo({{ $produto->id }})" class="btn btn-sm btn-icon btn-secondary" title="Ativar/Inativar">
                                            <i class="fe fe-power"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-4">Nenhum produto cadastrado.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
