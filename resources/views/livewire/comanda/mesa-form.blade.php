<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">{{ $mesa ? 'Editar mesa' : 'Nova mesa' }}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('mesas.index') }}" wire:navigate>Mesas</a></li>
                <li class="breadcrumb-item active">{{ $mesa ? 'Editar' : 'Nova' }}</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form wire:submit="salvar">
                        <div class="form-group">
                            <label>Número da mesa</label>
                            <input type="text" wire:model="numero" class="form-control" autofocus>
                            @error('numero')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="salvar">
                                <span wire:loading.remove wire:target="salvar">Salvar</span>
                                <span wire:loading wire:target="salvar">Salvando...</span>
                            </button>
                            <a href="{{ route('mesas.index') }}" wire:navigate class="btn btn-link">Cancelar</a>
                        </div>
                    </form>

                    @if ($mesa)
                        <hr>
                        <label class="small text-muted mb-1">Link do QR Code desta mesa</label>
                        <div class="input-group input-group-sm">
                            <input type="text" readonly value="{{ route('publico.comanda.mesa', $mesa->token) }}" class="form-control" onclick="this.select()">
                        </div>
                        <small class="text-muted">Gere o QR code a partir desse link e imprima na mesa.</small>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
