<div wire:poll.5s>
    <h2 class="texto-grande mb-4">Cozinha</h2>

    <div class="row">
        @forelse ($itens as $item)
            <div class="col-md-6 mb-3" wire:key="cozinha-{{ $item->id }}">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="texto-grande" style="font-size: 1.8rem;">Mesa {{ $item->comanda->mesa->numero }}</span>
                            <span class="badge badge-warning" style="font-size: 1rem;">{{ $item->hora_pedido->format('H:i') }}</span>
                        </div>
                        <p style="font-size: 1.5rem;" class="mb-3">
                            {{ $item->quantidade }}x {{ $item->produto->nome }}
                        </p>

                        <div class="d-flex" style="gap: 10px;">
                            <button type="button" wire:click="marcarPronto({{ $item->id }})" class="btn btn-success btn-grande flex-grow-1">
                                Pedido Pronto
                            </button>
                            @if ($podeCancel)
                                <button type="button" wire:click="confirmarCancelamento({{ $item->id }})" class="btn btn-danger btn-grande">
                                    Cancelar
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center text-muted" style="font-size: 1.5rem;">Nenhum pedido em preparo.</p>
            </div>
        @endforelse
    </div>
</div>
