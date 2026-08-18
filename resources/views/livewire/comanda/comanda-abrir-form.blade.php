<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Abrir comanda</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('comandas.index') }}" wire:navigate>Comandas</a></li>
                <li class="breadcrumb-item active">Abrir</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form wire:submit="salvar">
                        <div class="form-group">
                            <label>Mesa</label>
                            <select wire:model="mesaId" class="form-control">
                                <option value="">Selecione a mesa...</option>
                                @foreach ($mesasDisponiveis as $mesa)
                                    <option value="{{ $mesa->id }}">{{ $mesa->numero }}</option>
                                @endforeach
                            </select>
                            @error('mesaId')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Tipo</label>
                            <select wire:model="tipo" class="form-control">
                                @foreach ($tipos as $tipoOpcao)
                                    <option value="{{ $tipoOpcao->value }}">{{ $tipoOpcao->label() }}</option>
                                @endforeach
                            </select>
                            @error('tipo')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Garçom (opcional)</label>
                            <select wire:model="garcomId" class="form-control">
                                <option value="">Sem garçom atribuído</option>
                                @foreach ($garcons as $garcom)
                                    <option value="{{ $garcom->id }}">{{ $garcom->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <hr>

                        <p class="text-muted">Dados do cliente (opcional — só quando já souber quem está sentando).</p>

                        <div class="form-group">
                            <label>Nome do cliente</label>
                            <input type="text" wire:model="clienteNome" class="form-control">
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>CPF</label>
                                <input type="text" wire:model="clienteCpf" class="form-control" placeholder="000.000.000-00">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Telefone</label>
                                <input type="text" wire:model="clienteTelefone" class="form-control" placeholder="(00) 00000-0000">
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="salvar">
                                <span wire:loading.remove wire:target="salvar">Abrir comanda</span>
                                <span wire:loading wire:target="salvar">Abrindo...</span>
                            </button>
                            <a href="{{ route('comandas.index') }}" wire:navigate class="btn btn-link">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
