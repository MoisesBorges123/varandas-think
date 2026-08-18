<div class="text-left">
    <div class="row mb-3">
        <div class="col-md-4">
            <strong>Mesa:</strong><br>
            {{ $comanda->mesa->numero }}
        </div>
        <div class="col-md-4">
            <strong>Tipo:</strong><br>
            {{ $comanda->tipo->label() }}
        </div>
        <div class="col-md-4">
            <strong>Status:</strong><br>
            <span class="badge {{ $comanda->estaAberta() ? 'badge-success' : 'badge-secondary' }}">
                {{ $comanda->status->label() }}
            </span>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <strong>Garçom:</strong><br>
            {{ $comanda->garcom->nome ?? 'Não atribuído' }}
        </div>
        <div class="col-md-6">
            <strong>Cliente:</strong><br>
            {{ $comanda->cliente_nome ?? 'Não identificado' }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <strong>Aberta em:</strong><br>
            {{ $comanda->aberta_em->format('d/m/Y H:i') }}
        </div>
        <div class="col-md-6">
            <strong>Fechada em:</strong><br>
            {{ $comanda->fechada_em?->format('d/m/Y H:i') ?? '—' }}
        </div>
    </div>
</div>
