<div wire:poll.5s>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Painel do Balcão</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item active">Balcão</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Aguardando aprovação ({{ $filaAprovacao->count() }})</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <tbody>
                            @forelse ($filaAprovacao as $item)
                                <tr wire:key="aprovacao-{{ $item->id }}">
                                    <td>
                                        <strong>Mesa {{ $item->comanda->mesa->numero }}</strong><br>
                                        {{ $item->produto->nome }} ({{ $item->quantidade }})
                                    </td>
                                    <td class="text-right">
                                        <button type="button" wire:click="aprovar({{ $item->id }})" class="btn btn-sm btn-success">Aprovar</button>
                                        <button type="button" wire:click="rejeitar({{ $item->id }})" class="btn btn-sm btn-danger">Rejeitar</button>
                                    </td>
                                </tr>
                            @empty
                                <tr><td class="text-center text-muted py-3">Nada aguardando aprovação.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Em preparo ({{ $emPreparo->count() }})</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <tbody>
                            @forelse ($emPreparo as $item)
                                <tr wire:key="preparo-{{ $item->id }}">
                                    <td>
                                        <strong>Mesa {{ $item->comanda->mesa->numero }}</strong><br>
                                        {{ $item->produto->nome }} ({{ $item->quantidade }})
                                    </td>
                                    <td class="text-right">
                                        <button type="button" wire:click="confirmarCancelamento({{ $item->id }})" class="btn btn-sm btn-icon btn-danger" title="Cancelar">
                                            <i class="fe fe-x"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr><td class="text-center text-muted py-3">Nada em preparo.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Prontos ({{ $prontos->count() }})</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <tbody>
                            @forelse ($prontos as $item)
                                <tr wire:key="pronto-{{ $item->id }}" class="bg-light">
                                    <td>
                                        <strong>Mesa {{ $item->comanda->mesa->numero }}</strong><br>
                                        {{ $item->produto->nome }} ({{ $item->quantidade }})
                                    </td>
                                    <td class="text-right">
                                        <button type="button" wire:click="liberarParaGarcom({{ $item->id }})" class="btn btn-sm btn-primary">
                                            Liberar pro garçom
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr><td class="text-center text-muted py-3">Nada pronto no momento.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Aguardando retirada ({{ $liberados->count() }})</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <tbody>
                            @forelse ($liberados as $item)
                                <tr wire:key="liberado-{{ $item->id }}">
                                    <td>
                                        <strong>Mesa {{ $item->comanda->mesa->numero }}</strong><br>
                                        {{ $item->produto->nome }} ({{ $item->quantidade }})
                                    </td>
                                    <td class="text-right">
                                        <button type="button" wire:click="marcarEntregue({{ $item->id }})" class="btn btn-sm btn-outline-success">
                                            Marcar entregue
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr><td class="text-center text-muted py-3">Nada aguardando retirada.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
