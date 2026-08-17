<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">{{ $grupo ? 'Editar grupo de equivalência' : 'Novo grupo de equivalência' }}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}">Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('estoque.grupos.index') }}">Grupos de equivalência</a></li>
                <li class="breadcrumb-item active">{{ $grupo ? 'Editar' : 'Novo' }}</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form wire:submit="salvar">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" wire:model="nome" class="form-control" placeholder="Ex.: Cenoura" autofocus>
                            @error('nome')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        @if ($grupo)
                            <p class="text-muted small">
                                Custo médio ponderado atual:
                                R$ {{ number_format($grupo->custo_medio_ponderado, 4, ',', '.') }}
                                — recalculado automaticamente quando a feature de compras/notas fiscais
                                for implementada.
                            </p>
                        @endif

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="salvar">
                                <span wire:loading.remove wire:target="salvar">Salvar</span>
                                <span wire:loading wire:target="salvar">Salvando...</span>
                            </button>
                            <a href="{{ route('estoque.grupos.index') }}" class="btn btn-link">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
