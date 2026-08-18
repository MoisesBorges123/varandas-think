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
            <label>CPF</label>
            <input type="text" wire:model="clienteCpf" class="form-control" placeholder="000.000.000-00">
            @error('clienteCpf')
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
            <label>Como vai ser a comanda?</label>
            <div class="custom-control custom-radio">
                <input type="radio" id="tipo-individual" value="individual" wire:model="tipo" class="custom-control-input">
                <label class="custom-control-label" for="tipo-individual">Só minha (individual)</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="tipo-compartilhada" value="compartilhada" wire:model="tipo" class="custom-control-input">
                <label class="custom-control-label" for="tipo-compartilhada">Vamos dividir com a mesa (compartilhada)</label>
            </div>
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
