<div wire:poll.6s="atualizarItens">
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

        <div id="cardapio-cliente">
            @if ($estoqueDuvidoso)
                <div class="alert alert-warning">
                    <p class="mb-2">Esse item pode estar em falta agora.</p>
                    <button type="button" id="btn-confirmar-pedido-aviso" class="btn btn-sm btn-warning">Pedir mesmo assim</button>
                </div>
            @else
                <form id="form-pedir-item" class="mb-4">
                    <div class="form-group">
                        <label>O que vai pedir?</label>
                        <select wire:model="produtoSelecionadoId" class="form-control">
                            <option value="">Selecione...</option>
                            @foreach ($produtos as $produto)
                                <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                            @endforeach
                        </select>
                    </div>

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

                    <button type="submit" id="btn-pedir-item" class="btn btn-primary btn-block" wire:loading.attr="disabled" wire:target="pedirItem,confirmarPedidoComAviso">
                        <span wire:loading.remove wire:target="pedirItem,confirmarPedidoComAviso">Pedir</span>
                        <span wire:loading wire:target="pedirItem,confirmarPedidoComAviso">Enviando...</span>
                    </button>
                </form>
            @endif
        </div>

        <hr>

        @forelse ($comanda->itensPedido as $itemPedido)
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span>{{ $itemPedido->quantidade }}x {{ $itemPedido->produto->nome }}</span>
                <span class="badge badge-secondary">{{ $itemPedido->status->labelParaCliente() }}</span>
            </div>
        @empty
            <p class="text-center text-muted py-4" id="pedidos-vazio">Nenhum pedido lançado ainda.</p>
        @endforelse

        <button type="button" id="btn-encerrar-comanda" class="btn btn-outline-danger btn-block mt-4" wire:loading.attr="disabled" wire:target="encerrar">
            <span wire:loading.remove wire:target="encerrar">Encerrar comanda</span>
            <span wire:loading wire:target="encerrar">Encerrando...</span>
        </button>
    @else
        <div class="text-center py-3">
            <p class="text-muted mb-0">Esse link não está disponível no momento.</p>
        </div>
    @endif

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
