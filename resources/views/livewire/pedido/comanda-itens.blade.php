<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Itens da comanda — Mesa {{ $comanda->mesa->numero }}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('comandas.index') }}" wire:navigate>Comandas</a></li>
                <li class="breadcrumb-item active">Itens</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lançar item</h3>
                </div>
                <div class="card-body">
                    <form wire:submit="adicionarItem">
                        <div class="form-group">
                            <label>Categoria</label>
                            <select wire:model.live="categoriaFiltro" class="form-control">
                                <option value="">Todas</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Produto</label>
                            <select wire:model="produtoSelecionadoId" class="form-control">
                                <option value="">Selecione o produto...</option>
                                @foreach ($produtos as $produto)
                                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                                @endforeach
                            </select>
                            @error('produtoSelecionadoId')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Quantidade</label>
                            <input type="text" wire:model="quantidade" class="form-control">
                            @error('quantidade')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        @if ($comanda->tipo->value === 'compartilhada')
                            <div class="form-group">
                                <label>Pedido de (opcional)</label>
                                <input type="text" wire:model="pedidoPorNome" class="form-control" placeholder="Nome de quem pediu">
                            </div>
                        @endif

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="adicionarItem">
                                <span wire:loading.remove wire:target="adicionarItem">Enviar à cozinha</span>
                                <span wire:loading wire:target="adicionarItem">Enviando...</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Itens da comanda</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Qtd.</th>
                                <th>Status</th>
                                <th>Pedido às</th>
                                <th class="text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($itens as $item)
                                <tr wire:key="item-{{ $item->id }}">
                                    <td>
                                        {{ $item->produto->nome }}
                                        @if ($item->pedido_por_nome)
                                            <br><small class="text-muted">{{ $item->pedido_por_nome }}</small>
                                        @endif
                                    </td>
                                    <td>{{ $item->quantidade }}</td>
                                    <td>
                                        <span class="badge badge-info">{{ $item->status->label() }}</span>
                                    </td>
                                    <td>{{ $item->hora_pedido->format('H:i') }}</td>
                                    <td class="text-right">
                                        <button type="button" wire:click="confirmarCancelamento({{ $item->id }})" class="btn btn-sm btn-icon btn-danger" title="Cancelar">
                                            <i class="fe fe-x"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">Nenhum item lançado ainda.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
