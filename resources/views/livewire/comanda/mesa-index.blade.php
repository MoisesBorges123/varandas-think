<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Mesas</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item active">Mesas</li>
            </ol>
        </div>
        <div class="page-rightheader">
            <a href="{{ route('mesas.criar') }}" wire:navigate class="btn btn-primary">
                <i class="fe fe-plus mr-1"></i> Nova mesa
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <input type="text" wire:model.live.debounce.400ms="busca" class="form-control" placeholder="Buscar por número...">
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th>Número</th>
                                <th>Link do QR Code</th>
                                <th class="text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mesas as $mesa)
                                @php $linkMesa = route('publico.comanda.mesa', $mesa->token); @endphp
                                <tr wire:key="mesa-{{ $mesa->id }}">
                                    <td>{{ $mesa->numero }}</td>
                                    <td>
                                        <div class="input-group input-group-sm" style="max-width: 320px;">
                                            <input type="text" readonly value="{{ $linkMesa }}" class="form-control link-mesa" onclick="this.select()">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-secondary btn-copiar-link" data-link="{{ $linkMesa }}" title="Copiar link">
                                                    <i class="fe fe-copy"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('mesas.editar', $mesa) }}" wire:navigate class="btn btn-sm btn-icon btn-info" title="Editar">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                        <button type="button" wire:click="confirmarExclusao({{ $mesa->id }})" class="btn btn-sm btn-icon btn-danger" title="Excluir">
                                            <i class="fe fe-trash-2"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted py-4">Nenhuma mesa cadastrada.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @script
    <script>
        $wire.$el.addEventListener('click', (evento) => {
            const botao = evento.target.closest('.btn-copiar-link');

            if (!botao) {
                return;
            }

            navigator.clipboard.writeText(botao.dataset.link).then(() => {
                const icone = botao.querySelector('i');
                icone.classList.replace('fe-copy', 'fe-check');
                setTimeout(() => icone.classList.replace('fe-check', 'fe-copy'), 1500);
            });
        });
    </script>
    @endscript
</div>
