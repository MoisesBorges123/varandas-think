<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">{{ $ingrediente ? 'Editar insumo' : 'Novo insumo' }}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}">Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('estoque.ingredientes.index') }}">Insumos</a></li>
                <li class="breadcrumb-item active">{{ $ingrediente ? 'Editar' : 'Novo' }}</li>
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
                            <input type="text" wire:model="nome" class="form-control" autofocus>
                            @error('nome')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Unidade de medida</label>
                            <input type="text" wire:model="unidadeMedida" class="form-control" placeholder="kg, g, l, ml, un...">
                            @error('unidadeMedida')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Código fiscal (opcional)</label>
                            <input type="text" wire:model="codigoFiscal" class="form-control" placeholder="NCM/EAN da nota fiscal">
                        </div>

                        <div class="form-group">
                            <label>Grupo de equivalência</label>
                            <select wire:model="grupoEquivalenciaId" class="form-control">
                                <option value="">Sem grupo (gera pendência)</option>
                                @foreach ($grupos as $grupo)
                                    <option value="{{ $grupo->id }}">{{ $grupo->nome }}</option>
                                @endforeach
                            </select>
                            <small class="text-muted">
                                Deixar sem grupo gera uma notificação de pendência para os administradores.
                            </small>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="salvar">
                                <span wire:loading.remove wire:target="salvar">Salvar</span>
                                <span wire:loading wire:target="salvar">Salvando...</span>
                            </button>
                            <a href="{{ route('estoque.ingredientes.index') }}" class="btn btn-link">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
