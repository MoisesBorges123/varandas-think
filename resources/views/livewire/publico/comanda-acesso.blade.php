<div class="catalogo-cliente" wire:poll.6s="atualizarItens">
    @if ($encerradaComSucesso)
        <div class="text-center py-3">
            <h5>Comanda encerrada</h5>
            <p class="text-muted mb-0">Obrigado pela visita!</p>
        </div>
    @elseif (! $verificado)
        <div class="text-center py-3" id="verificando-localizacao">
            <p class="text-muted mb-2">Confirmando sua localização...</p>
            <p class="text-muted small mb-0">
                Seu navegador deve pedir permissão de localização — precisa aceitar pra continuar.
            </p>
        </div>
    @elseif ($liberado && $comanda)
        <h5 class="text-center mb-1">Mesa {{ $comanda->mesa->numero }}</h5>
        <p class="text-muted text-center mb-4">
            Comanda {{ $comanda->tipo->label() }} — aberta às {{ $comanda->aberta_em->format('H:i') }}
        </p>

        @if ($produtosEmPromocao->isNotEmpty())
            <div class="catalogo-promo-faixa">
                @foreach ($produtosEmPromocao as $produto)
                    <div class="catalogo-promo-card" wire:click="abrirDetalhe({{ $produto->id }})" wire:key="promo-{{ $produto->id }}">
                        <span class="catalogo-promo-selo">Promoção</span>
                        <div class="catalogo-promo-foto">
                            @if ($produto->fotoCapa())
                                <img src="{{ $produto->fotoCapa()->url }}" alt="{{ $produto->nome }}">
                            @else
                                <div class="catalogo-sem-foto"><i class="fe fe-image"></i></div>
                            @endif
                        </div>
                        <div class="catalogo-promo-info">
                            <div class="catalogo-promo-nome">{{ $produto->nome }}</div>
                            <div class="catalogo-promo-preco">
                                {{ $produto->precoAtual ? 'R$ ' . number_format($produto->precoAtual->preco, 2, ',', '.') : '' }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div id="cardapio-cliente" class="catalogo-grid">
            @foreach ($produtos as $produto)
                @php $media = $mediaPorProduto[$produto->id] ?? ['media' => 0.0, 'quantidade' => 0]; @endphp
                <div class="catalogo-card" wire:click="abrirDetalhe({{ $produto->id }})" wire:key="produto-{{ $produto->id }}">
                    <div class="catalogo-card-foto">
                        @if ($produto->fotoCapa())
                            <img src="{{ $produto->fotoCapa()->url }}" alt="{{ $produto->nome }}">
                        @else
                            <div class="catalogo-sem-foto"><i class="fe fe-image"></i></div>
                        @endif
                    </div>
                    <div class="catalogo-card-info">
                        <div class="catalogo-card-nome">{{ $produto->nome }}</div>
                        <div class="catalogo-card-preco">
                            {{ $produto->precoAtual ? 'R$ ' . number_format($produto->precoAtual->preco, 2, ',', '.') : '—' }}
                        </div>
                        @if ($media['quantidade'] > 0)
                            <div class="catalogo-card-nota">★ {{ number_format($media['media'], 1, ',', '.') }} <span class="text-muted">({{ $media['quantidade'] }})</span></div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <hr>

        @forelse ($comanda->itensPedido as $itemPedido)
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span>{{ $itemPedido->quantidade }}x {{ $itemPedido->produto->nome }}</span>

                @if ($itemPedido->status->value === 'entregue')
                    @if ($itemPedido->avaliacao)
                        <span class="text-muted small">Você avaliou: {{ $itemPedido->avaliacao->nota }} ★</span>
                    @else
                        <div class="catalogo-avaliar" wire:key="avaliar-{{ $itemPedido->id }}">
                            <span class="text-muted small mr-1">Avaliar:</span>
                            @for ($nota = 1; $nota <= 5; $nota++)
                                <button type="button" wire:click="avaliar({{ $itemPedido->id }}, {{ $nota }})" class="catalogo-estrela-btn" title="{{ $nota }} estrela(s)">★</button>
                            @endfor
                        </div>
                    @endif
                @else
                    <span class="badge badge-secondary">{{ $itemPedido->status->labelParaCliente() }}</span>
                @endif
            </div>
        @empty
            <p class="text-center text-muted py-4" id="pedidos-vazio">Nenhum pedido lançado ainda.</p>
        @endforelse

        <button type="button" id="btn-encerrar-comanda" class="btn btn-outline-danger btn-block mt-4" wire:loading.attr="disabled" wire:target="encerrar">
            <span wire:loading.remove wire:target="encerrar">Encerrar comanda</span>
            <span wire:loading wire:target="encerrar">Encerrando...</span>
        </button>

        @if ($produtoDetalhe)
            <div class="catalogo-overlay" id="produto-detalhe-overlay">
                <div class="catalogo-overlay-fundo" wire:click="fecharDetalhe"></div>
                <div class="catalogo-overlay-painel">
                    <button type="button" id="btn-fechar-detalhe" class="catalogo-overlay-fechar" wire:click="fecharDetalhe">&times;</button>

                    @if ($produtoDetalhe->fotos->isNotEmpty())
                        <div class="catalogo-galeria">
                            @foreach ($produtoDetalhe->fotos as $foto)
                                <img src="{{ $foto->url }}" alt="{{ $produtoDetalhe->nome }}">
                            @endforeach
                        </div>
                    @else
                        <div class="catalogo-sem-foto catalogo-galeria-vazia"><i class="fe fe-image"></i></div>
                    @endif

                    <div class="p-3">
                        <h5 class="mb-1">{{ $produtoDetalhe->nome }}</h5>
                        <p class="catalogo-promo-preco mb-1">
                            {{ $produtoDetalhe->precoAtual ? 'R$ ' . number_format($produtoDetalhe->precoAtual->preco, 2, ',', '.') : '' }}
                        </p>
                        @if ($mediaAvaliacoesDetalhe && $mediaAvaliacoesDetalhe['quantidade'] > 0)
                            <p class="text-muted small mb-3">
                                ★ {{ number_format($mediaAvaliacoesDetalhe['media'], 1, ',', '.') }}
                                ({{ $mediaAvaliacoesDetalhe['quantidade'] }} avaliação{{ $mediaAvaliacoesDetalhe['quantidade'] > 1 ? 'ões' : '' }})
                            </p>
                        @endif

                        @if ($estoqueDuvidoso)
                            <div class="alert alert-warning">
                                <p class="mb-2">Esse item pode estar em falta agora.</p>
                                <button type="button" id="btn-confirmar-pedido-aviso" class="btn btn-sm btn-warning">Pedir mesmo assim</button>
                            </div>
                        @else
                            <form id="form-pedir-item">
                                <div class="form-group">
                                    <label>Quantidade</label>
                                    <input type="text" wire:model="quantidade" class="form-control">
                                </div>

                                @if ($comanda->tipo->value === 'compartilhada')
                                    <div class="form-group">
                                        <label>Seu nome (opcional)</label>
                                        <input type="text" wire:model="pedidoPorNome" class="form-control">
                                    </div>
                                @endif

                                <button type="submit" id="btn-pedir-item" class="btn btn-block catalogo-btn-pedir" wire:loading.attr="disabled" wire:target="pedirItem,confirmarPedidoComAviso">
                                    <span wire:loading.remove wire:target="pedirItem,confirmarPedidoComAviso">Pedir</span>
                                    <span wire:loading wire:target="pedirItem,confirmarPedidoComAviso">Enviando...</span>
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    @else
        <div class="text-center py-3">
            <p class="text-muted mb-0">Esse link não está disponível no momento.</p>
        </div>
    @endif

    <style>
        .catalogo-cliente {
            --catalogo-escuro: #2d2d2d;
            --catalogo-acento: #b8860b;
            --catalogo-acento-claro: #d4a017;
        }

        .catalogo-promo-faixa {
            display: flex;
            gap: .75rem;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            padding-bottom: .5rem;
            margin-bottom: 1rem;
        }

        .catalogo-promo-card {
            flex: 0 0 auto;
            width: 220px;
            scroll-snap-align: start;
            background: var(--catalogo-escuro);
            color: #fff;
            border-radius: .5rem;
            overflow: hidden;
            cursor: pointer;
            position: relative;
            transition: transform .15s ease;
        }

        .catalogo-promo-card:hover {
            transform: translateY(-3px);
        }

        .catalogo-promo-selo {
            position: absolute;
            top: 8px;
            left: 8px;
            background: var(--catalogo-acento-claro);
            color: var(--catalogo-escuro);
            font-size: .7rem;
            font-weight: 700;
            text-transform: uppercase;
            padding: .15rem .5rem;
            border-radius: 1rem;
            z-index: 1;
            animation: catalogo-pulso 2s ease-in-out infinite;
        }

        @keyframes catalogo-pulso {
            0%, 100% { box-shadow: 0 0 0 0 rgba(212, 160, 23, .5); }
            50% { box-shadow: 0 0 0 6px rgba(212, 160, 23, 0); }
        }

        .catalogo-promo-foto {
            height: 120px;
            background: #444;
        }

        .catalogo-promo-foto img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .catalogo-promo-info {
            padding: .5rem .75rem .75rem;
        }

        .catalogo-promo-nome {
            font-weight: 600;
            font-size: .9rem;
        }

        .catalogo-promo-preco {
            color: var(--catalogo-acento-claro);
            font-weight: 700;
        }

        .catalogo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
            gap: .75rem;
            margin-bottom: 1rem;
        }

        .catalogo-card {
            border: 1px solid #eee;
            border-radius: .5rem;
            overflow: hidden;
            cursor: pointer;
            background: #fff;
            transition: transform .15s ease, box-shadow .15s ease;
        }

        .catalogo-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, .1);
        }

        .catalogo-card-foto {
            aspect-ratio: 1 / 1;
            background: #f0f0f0;
        }

        .catalogo-card-foto img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .catalogo-sem-foto {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #bbb;
            font-size: 1.8rem;
        }

        .catalogo-card-info {
            padding: .5rem .6rem .65rem;
        }

        .catalogo-card-nome {
            font-weight: 600;
            font-size: .85rem;
            line-height: 1.2;
            color: var(--catalogo-escuro);
            margin-bottom: .15rem;
        }

        .catalogo-card-preco {
            color: var(--catalogo-acento);
            font-weight: 700;
            font-size: .85rem;
        }

        .catalogo-card-nota {
            font-size: .75rem;
            color: var(--catalogo-acento-claro);
        }

        .catalogo-btn-pedir {
            background: var(--catalogo-acento-claro);
            border-color: var(--catalogo-acento-claro);
            color: var(--catalogo-escuro);
            font-weight: 700;
            transition: background-color .15s ease;
        }

        .catalogo-btn-pedir:hover {
            background: var(--catalogo-acento);
            border-color: var(--catalogo-acento);
            color: #fff;
        }

        .catalogo-estrela-btn {
            background: none;
            border: none;
            font-size: 1.1rem;
            color: #ccc;
            padding: 0 .1rem;
            cursor: pointer;
            transition: color .1s ease;
        }

        .catalogo-estrela-btn:hover {
            color: var(--catalogo-acento-claro);
        }

        .catalogo-overlay {
            position: fixed;
            inset: 0;
            z-index: 1050;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .catalogo-overlay-fundo {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, .75);
        }

        .catalogo-overlay-painel {
            position: relative;
            background: #fff;
            width: 100%;
            max-width: 480px;
            max-height: 90vh;
            overflow-y: auto;
            border-radius: 1rem 1rem 0 0;
            animation: catalogo-subir .2s ease-out;
        }

        @media (min-width: 480px) {
            .catalogo-overlay {
                align-items: center;
            }

            .catalogo-overlay-painel {
                border-radius: 1rem;
            }
        }

        @keyframes catalogo-subir {
            from { transform: translateY(24px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .catalogo-overlay-fechar {
            position: absolute;
            top: .5rem;
            right: .5rem;
            z-index: 1;
            background: rgba(0, 0, 0, .5);
            color: #fff;
            border: none;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            font-size: 1.2rem;
            line-height: 1;
        }

        .catalogo-galeria {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
        }

        .catalogo-galeria img {
            flex: 0 0 100%;
            scroll-snap-align: start;
            height: 220px;
            object-fit: cover;
        }

        .catalogo-galeria-vazia {
            height: 180px;
        }
    </style>

    {{--
        window.pedirLocalizacaoComanda em vez de "function ...(){}" local:
        o @script do Livewire roda cada bloco via Alpine.evaluate(), que
        pode nao ver uma funcao declarada localmente quando ela e chamada
        de novo depois ("is not defined"); window resolve isso.

        Mantenha o <script> abaixo sem comentarios longos com acentos: em
        APP_DEBUG=true o Livewire roda um DOMDocument::loadHTML() nesse
        conteudo pra checar "root element unico", e esse parser e fragil
        com texto UTF-8 longo dentro de <script> — ja causou HTTP 500
        aqui. Comentarios no Blade (fora do @script) nao tem esse risco.
    --}}
    @script
    <script>
        window.pedirLocalizacaoComanda = function (callback) {
            if (!navigator.geolocation) {
                callback(0, 0);
                return;
            }

            navigator.geolocation.getCurrentPosition(
                (posicao) => callback(posicao.coords.latitude, posicao.coords.longitude),
                () => callback(0, 0),
                { timeout: 10000, maximumAge: 0 },
            );
        };

        window.pedirLocalizacaoComanda((lat, lng) => $wire.call('verificarLocalizacao', lat, lng));

        $wire.$el.addEventListener('click', (evento) => {
            if (evento.target.closest('#btn-encerrar-comanda')) {
                window.pedirLocalizacaoComanda((lat, lng) => $wire.call('encerrar', lat, lng));
            }

            if (evento.target.closest('#btn-confirmar-pedido-aviso')) {
                $wire.call('confirmarPedidoComAviso');
            }
        });

        $wire.$el.addEventListener('submit', (evento) => {
            if (evento.target.closest('#form-pedir-item')) {
                evento.preventDefault();
                window.pedirLocalizacaoComanda((lat, lng) => $wire.call('pedirItem', lat, lng));
            }
        });
    </script>
    @endscript
</div>
