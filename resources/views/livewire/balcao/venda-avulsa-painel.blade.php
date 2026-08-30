<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Venda Avulsa</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item active">Venda Avulsa</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Produtos</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-7 form-group mb-0">
                            <input type="text" wire:model.live.debounce.300ms="busca" class="form-control" placeholder="Buscar produto pelo nome...">
                        </div>
                        <div class="col-3 form-group mb-0">
                            <select wire:model.live="categoriaId" class="form-control">
                                <option value="">Todas categorias</option>
                                @foreach ($categoriasDisponiveis as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2 form-group mb-0">
                            <button type="button" wire:click="limparFiltros" class="btn btn-outline-secondary w-100" title="Limpar filtros">
                                <i class="fe fe-x"></i>
                            </button>
                        </div>
                    </div>

                    @forelse ($produtosPorCategoria as $produtosDoGrupo)
                        <h6 class="text-muted text-uppercase small mt-3 mb-2">{{ $produtosDoGrupo->first()->categoria?->nome ?? 'Sem categoria' }}</h6>
                        <div class="d-flex flex-wrap mb-2" style="gap: .75rem;">
                            @foreach ($produtosDoGrupo as $produto)
                                <button
                                    type="button"
                                    wire:key="produto-avulso-{{ $produto->id }}"
                                    wire:click="selecionarProduto({{ $produto->id }})"
                                    class="btn btn-outline-primary text-left d-flex flex-column justify-content-center"
                                    style="width: 160px; height: 84px; white-space: normal;"
                                >
                                    <span class="font-weight-bold">{{ $produto->nome }}</span>
                                    <span class="text-muted small">
                                        {{ $produto->precoAtual ? 'R$ ' . number_format($produto->precoAtual->preco, 2, ',', '.') : 'sem preço' }}
                                    </span>
                                </button>
                            @endforeach
                        </div>
                    @empty
                        <p class="text-muted mb-0">
                            Nenhum produto de venda avulsa encontrado.
                            @if ($busca === '' && $categoriaId === '')
                                Cadastre a conversão de unidade em
                                <a href="{{ route('cardapio.produtos.index') }}" wire:navigate>Cardápio &gt; Produtos</a>.
                            @endif
                        </p>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Carrinho</h3>
                </div>
                <div class="card-body">
                    @forelse ($carrinhoDetalhado as $item)
                        <div class="d-flex justify-content-between align-items-center border-bottom py-2" wire:key="carrinho-item-{{ $item['produto_id'] }}">
                            <div>
                                <div>{{ $item['quantidade'] }}x {{ $item['nome'] }}</div>
                                <div class="text-muted small">R$ {{ number_format($item['subtotal'], 2, ',', '.') }}</div>
                            </div>
                            <button type="button" wire:click="removerDoCarrinho({{ $item['produto_id'] }})" class="btn btn-sm btn-icon btn-outline-danger" title="Remover">
                                <i class="fe fe-x"></i>
                            </button>
                        </div>
                    @empty
                        <p class="text-muted small mb-0">Nenhum item adicionado ainda. Toque num produto ao lado.</p>
                    @endforelse

                    @if ($carrinhoDetalhado->isNotEmpty())
                        <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                            <strong>Total</strong>
                            <strong>R$ {{ number_format($carrinhoTotal, 2, ',', '.') }}</strong>
                        </div>

                        <button type="button" wire:click="abrirPagamento" class="btn btn-primary btn-block">
                            Finalizar venda
                        </button>
                        <button type="button" wire:click="confirmarCancelarCarrinho" class="btn btn-link btn-block text-danger mb-0">
                            Cancelar venda
                        </button>
                    @endif
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Últimas vendas</h3>
                </div>
                <div class="card-body" style="max-height: 300px; overflow-y: auto;">
                    @forelse ($vendasRecentes as $venda)
                        <div class="d-flex justify-content-between align-items-start border-bottom py-2" wire:key="venda-recente-{{ $venda->id }}">
                            <div>
                                <div>
                                    @foreach ($venda->itens as $item)
                                        {{ $item->quantidade }}x {{ $item->produto->nome }}{{ ! $loop->last ? ', ' : '' }}
                                    @endforeach
                                </div>
                                <div class="text-muted small">{{ $venda->forma_pagamento->label() }} — {{ $venda->created_at->format('H:i') }}</div>
                            </div>
                            <div class="text-nowrap">R$ {{ number_format($venda->valor_total, 2, ',', '.') }}</div>
                        </div>
                    @empty
                        <p class="text-muted small mb-0">Nenhuma venda registrada ainda.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    @if ($produtoSelecionado)
        <div class="venda-avulsa-overlay">
            <div class="venda-avulsa-overlay-fundo" wire:click="cancelarSelecao"></div>
            <div class="venda-avulsa-overlay-painel">
                <h5 class="text-center mb-1">{{ $produtoSelecionado->nome }}</h5>
                <p class="text-center text-muted mb-3">
                    {{ $produtoSelecionado->precoAtual ? 'R$ ' . number_format($produtoSelecionado->precoAtual->preco, 2, ',', '.') : '' }}
                    cada
                </p>

                <div class="d-flex align-items-center justify-content-center mb-3" style="gap: 1.5rem;">
                    <button type="button" wire:click="decrementarQuantidade" class="btn btn-icon btn-outline-secondary">
                        <i class="fe fe-minus"></i>
                    </button>
                    <span style="font-size: 1.5rem; min-width: 2ch; text-align: center;">{{ $quantidade }}</span>
                    <button type="button" wire:click="incrementarQuantidade" class="btn btn-icon btn-outline-secondary">
                        <i class="fe fe-plus"></i>
                    </button>
                </div>

                <button type="button" wire:click="adicionarAoCarrinho" class="btn btn-primary btn-block">
                    Adicionar ao carrinho
                </button>
                <button type="button" wire:click="cancelarSelecao" class="btn btn-link btn-block mt-2 mb-0">Cancelar</button>
            </div>
        </div>
    @endif

    @if ($mostrarPagamento)
        <div class="venda-avulsa-overlay">
            <div class="venda-avulsa-overlay-fundo" wire:click="fecharPagamento"></div>
            <div class="venda-avulsa-overlay-painel">
                <h5 class="text-center mb-1">Finalizar venda</h5>
                <p class="text-center text-muted mb-3">Total: R$ {{ number_format($carrinhoTotal, 2, ',', '.') }}</p>

                <p class="text-center text-muted small mb-2">Como foi pago?</p>
                <div class="d-flex flex-wrap justify-content-center" style="gap: .5rem;">
                    @foreach ($formasPagamento as $forma)
                        <button
                            type="button"
                            wire:click="finalizar('{{ $forma->value }}')"
                            wire:loading.attr="disabled"
                            wire:target="finalizar"
                            class="btn btn-primary"
                        >
                            {{ $forma->label() }}
                        </button>
                    @endforeach
                </div>

                <button type="button" wire:click="fecharPagamento" class="btn btn-link btn-block mt-3 mb-0">Voltar</button>
            </div>
        </div>
    @endif

    <style>
        .venda-avulsa-overlay {
            position: fixed;
            inset: 0;
            z-index: 1050;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .venda-avulsa-overlay-fundo {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, .5);
        }

        .venda-avulsa-overlay-painel {
            position: relative;
            background: #fff;
            width: 100%;
            max-width: 360px;
            border-radius: .75rem;
            padding: 1.5rem;
        }
    </style>
</div>
