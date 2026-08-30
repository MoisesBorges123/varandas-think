<div>
    <h4 class="text-center mb-1">Mesa {{ $mesa->numero }}</h4>
    <p class="text-muted text-center mb-4">Preencha seus dados pra abrir a comanda</p>

    @if ($foraDoRaio)
        <div class="alert alert-warning">
            Não conseguimos confirmar que você está no bar. Aproxime-se e tente novamente.
        </div>
    @endif

    <form id="form-abrir-comanda">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" wire:model="clienteNome" class="form-control">
            @error('clienteNome')
                <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Telefone</label>
            <input type="text" wire:model="clienteTelefone" class="form-control" placeholder="(00) 00000-0000">
            @error('clienteTelefone')
                <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>E-mail <span class="text-muted">(opcional)</span></label>
            <input type="email" wire:model="clienteEmail" class="form-control" placeholder="voce@email.com">
            @error('clienteEmail')
                <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" id="btn-abrir-comanda" class="btn btn-primary btn-block" wire:loading.attr="disabled" wire:target="abrirComanda">
            <span wire:loading.remove wire:target="abrirComanda">Abrir comanda</span>
            <span wire:loading wire:target="abrirComanda">Abrindo...</span>
        </button>
    </form>

    @script
    <script>
        $wire.$el.querySelector('#form-abrir-comanda')?.addEventListener('submit', function (evento) {
            evento.preventDefault();

            if (!navigator.geolocation) {
                alert('Seu navegador não suporta geolocalização — não é possível abrir a comanda.');
                return;
            }

            navigator.geolocation.getCurrentPosition(
                (posicao) => $wire.call('abrirComanda', posicao.coords.latitude, posicao.coords.longitude),
                () => alert('Não foi possível confirmar sua localização. Ative o GPS do celular e tente de novo.'),
                { timeout: 10000, maximumAge: 0 },
            );
        });
    </script>
    @endscript
</div>
