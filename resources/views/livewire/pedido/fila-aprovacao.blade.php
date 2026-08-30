<div wire:poll.5s>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Fila de aprovação</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item active">Fila de aprovação</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th>Mesa</th>
                                <th>Produto</th>
                                <th>Qtd.</th>
                                <th>Pedido por</th>
                                <th>Pedido às</th>
                                <th class="text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($itens as $item)
                                <tr wire:key="fila-{{ $item->id }}">
                                    <td>{{ $item->comanda->mesa->numero }}</td>
                                    <td>{{ $item->produto->nome }}</td>
                                    <td>{{ $item->quantidade }}</td>
                                    <td>{{ $item->pedido_por_nome ?? $item->comanda->cliente_nome ?? '—' }}</td>
                                    <td>{{ $item->hora_pedido->format('H:i') }}</td>
                                    <td class="text-right">
                                        <button type="button" wire:click="aprovar({{ $item->id }})" class="btn btn-sm btn-success">
                                            <i class="fe fe-check mr-1"></i> Aprovar
                                        </button>
                                        <button type="button" wire:click="confirmarRejeicao({{ $item->id }})" class="btn btn-sm btn-danger">
                                            <i class="fe fe-x mr-1"></i> Rejeitar
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-4">Nenhum pedido aguardando aprovação.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
