<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">{{ $produto ? 'Editar produto' : 'Novo produto' }}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('cardapio.produtos.index') }}" wire:navigate>Produtos</a></li>
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
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" wire:model="emPromocao" class="custom-control-input">
                                <span class="custom-control-label">Em promoção (aparece em destaque no cardápio do cliente)</span>
                            </label>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="salvar">
                                <span wire:loading.remove wire:target="salvar">Salvar</span>
                                <span wire:loading wire:target="salvar">Salvando...</span>
                            </button>
                            <a href="{{ route('cardapio.produtos.index') }}" wire:navigate class="btn btn-link">Cancelar</a>
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

    @if ($produto)
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Fotos do produto</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap" style="gap: .75rem;">
                            @forelse ($fotos as $foto)
                                <div wire:key="foto-{{ $foto->id }}" style="width: 110px;">
                                    <div class="position-relative">
                                        <img src="{{ $foto->url }}" alt="Foto do produto" class="w-100 rounded" style="height: 110px; object-fit: cover;">
                                        @if ($loop->first)
                                            <span class="badge badge-warning position-absolute" style="top: 4px; left: 4px;">Capa</span>
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        @unless ($loop->first)
                                            <button type="button" wire:click="tornarCapa({{ $foto->id }})" class="btn btn-xs btn-link p-0" title="Tornar capa">
                                                <i class="fe fe-star"></i>
                                            </button>
                                        @else
                                            <span></span>
                                        @endunless
                                        <button type="button" wire:click="removerFoto({{ $foto->id }})" class="btn btn-xs btn-link text-danger p-0" title="Remover">
                                            <i class="fe fe-trash-2"></i>
                                        </button>
                                    </div>
                                </div>
                            @empty
                                <p class="text-muted small mb-0">Nenhuma foto cadastrada ainda.</p>
                            @endforelse
                        </div>

                        <form wire:submit="enviarFotos" class="mt-3">
                            <div class="form-group mb-2">
                                <input type="file" wire:model="novasFotos" multiple accept="image/*" class="form-control">
                                @error('novasFotos.*')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div wire:loading wire:target="novasFotos" class="text-muted small mb-2">Carregando...</div>
                            <button type="submit" class="btn btn-outline-primary" wire:loading.attr="disabled" wire:target="enviarFotos">
                                <span wire:loading.remove wire:target="enviarFotos">Enviar fotos</span>
                                <span wire:loading wire:target="enviarFotos">Enviando...</span>
                            </button>
                        </form>
                        <p class="text-muted small mt-2 mb-0">
                            As fotos são redimensionadas e convertidas para .webp automaticamente. Máximo de 8 fotos por produto.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Avaliações</h3>
                    </div>
                    <div class="card-body">
                        @if ($mediaAvaliacoes['quantidade'] > 0)
                            <p>
                                <strong>{{ number_format($mediaAvaliacoes['media'], 1, ',', '.') }} ★</strong>
                                <span class="text-muted">({{ $mediaAvaliacoes['quantidade'] }} avaliação{{ $mediaAvaliacoes['quantidade'] > 1 ? 'ões' : '' }})</span>
                            </p>
                        @else
                            <p class="text-muted small">Ainda sem avaliações de clientes.</p>
                        @endif

                        @if ($avaliacoes->isNotEmpty())
                            <div class="table-responsive" style="max-height: 260px; overflow-y: auto;">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Nota</th>
                                            <th>Pedinte</th>
                                            <th>Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($avaliacoes as $avaliacao)
                                            <tr>
                                                <td>{{ $avaliacao->nota }} ★</td>
                                                <td>{{ $avaliacao->itemPedido->pedido_por_nome ?? '—' }}</td>
                                                <td>{{ $avaliacao->created_at->format('d/m/Y H:i') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
