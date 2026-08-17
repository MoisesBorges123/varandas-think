<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">{{ $produto ? 'Editar produto' : 'Novo produto' }}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}">Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('cardapio.produtos.index') }}">Produtos</a></li>
                <li class="breadcrumb-item active">{{ $produto ? 'Editar' : 'Novo' }}</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Dados do produto</h3>
                </div>
                <div class="card-body">
                    <form wire:submit="salvar">
                        <div class="form-group">
                            <label>Categoria</label>
                            <select wire:model="categoriaId" class="form-control">
                                <option value="">Selecione...</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                @endforeach
                            </select>
                            @error('categoriaId')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" wire:model="nome" class="form-control" autofocus>
                            @error('nome')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Tipo</label>
                            <select wire:model="tipo" class="form-control">
                                @foreach ($tipos as $t)
                                    <option value="{{ $t->value }}">{{ $t->label() }}</option>
                                @endforeach
                            </select>
                            @error('tipo')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        @unless ($produto)
                            <div class="form-group">
                                <label>Preço inicial (R$)</label>
                                <input type="text" wire:model="precoInicial" class="form-control" placeholder="0.00">
                                @error('precoInicial')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        @endunless

                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" wire:model="ativo" class="custom-control-input">
                                <span class="custom-control-label">Produto ativo</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" wire:model="disponivel" class="custom-control-input">
                                <span class="custom-control-label">Disponível hoje</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" wire:model="validaEstoqueAutomatico" class="custom-control-input">
                                <span class="custom-control-label">Validar estoque automaticamente</span>
                            </label>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="salvar">
                                <span wire:loading.remove wire:target="salvar">Salvar</span>
                                <span wire:loading wire:target="salvar">Salvando...</span>
                            </button>
                            <a href="{{ route('cardapio.produtos.index') }}" class="btn btn-link">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @if ($produto)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Preço</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            Preço atual:
                            <strong>
                                {{ $produto->precoAtual ? 'R$ ' . number_format($produto->precoAtual->preco, 2, ',', '.') : 'sem preço definido' }}
                            </strong>
                        </p>
                        <p class="text-muted small">
                            O preço é histórico — definir um novo valor não altera o antigo,
                            apenas registra a partir de quando o novo preço passa a valer.
                        </p>

                        <form wire:submit="definirPreco" class="d-flex" style="gap: .5rem;">
                            <input type="text" wire:model="novoPreco" class="form-control" placeholder="Novo preço (R$)">
                            <button type="submit" class="btn btn-outline-primary text-nowrap" wire:loading.attr="disabled" wire:target="definirPreco">
                                Definir preço
                            </button>
                        </form>
                        @error('novoPreco')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
