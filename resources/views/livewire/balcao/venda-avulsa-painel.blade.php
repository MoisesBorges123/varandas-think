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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Produtos</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap" style="gap: .75rem;">
                        @forelse ($produtos as $produto)
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
                        @empty
                            <p class="text-muted mb-0">
                                Nenhum produto de venda avulsa disponível. Cadastre a conversão de unidade em
                                <a href="{{ route('cardapio.produtos.index') }}" wire:navigate>Cardápio &gt; Produtos</a>.
                            </p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Últimas vendas</h3>
                </div>
                <div class="card-body" style="max-height: 420px; overflow-y: auto;">
                    @forelse ($vendasRecentes as $venda)
                        <div class="d-flex justify-content-between align-items-start border-bottom py-2" wire:key="venda-recente-{{ $venda->id }}">
                            <div>
                                <div>{{ $venda->quantidade }}x {{ $venda->produto->nome }}</div>
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

                <p class="text-center text-muted small mb-2">Como foi pago?</p>
                <div class="d-flex flex-wrap justify-content-center" style="gap: .5rem;">
                    @foreach ($formasPagamento as $forma)
                        <button
                            type="button"
                            wire:click="vender('{{ $forma->value }}')"
                            wire:loading.attr="disabled"
                            wire:target="vender"
                            class="btn btn-primary"
                        >
                            {{ $forma->label() }}
                        </button>
                    @endforeach
                </div>

                <button type="button" wire:click="cancelarSelecao" class="btn btn-link btn-block mt-3 mb-0">Cancelar</button>
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
