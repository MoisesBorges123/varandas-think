<div>
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

        <div class="text-center text-muted py-4" id="pedidos-placeholder">
            Nenhum pedido lançado ainda.
        </div>

        <button type="button" id="btn-encerrar-comanda" class="btn btn-outline-danger btn-block" wire:loading.attr="disabled" wire:target="encerrar">
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
        });
    </script>
    @endscript
</div>
