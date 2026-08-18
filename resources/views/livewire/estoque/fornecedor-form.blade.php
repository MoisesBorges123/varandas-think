<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">{{ $fornecedor ? 'Editar fornecedor' : 'Novo fornecedor' }}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('estoque.fornecedores.index') }}" wire:navigate>Fornecedores</a></li>
                <li class="breadcrumb-item active">{{ $fornecedor ? 'Editar' : 'Novo' }}</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form wire:submit="salvar">
                        <div class="form-group">
                            <label>Razão social / Nome</label>
                            <input type="text" wire:model="razaoSocial" class="form-control" autofocus>
                            @error('razaoSocial')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nome fantasia (opcional)</label>
                            <input type="text" wire:model="nomeFantasia" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>CNPJ (opcional)</label>
                            <input type="text" wire:model="cnpj" class="form-control" placeholder="Deixe em branco se o fornecedor não tiver CNPJ">
                            @error('cnpj')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Fornecedores sem nota fiscal (feira, produtor local etc.) podem não ter CNPJ.</small>
                        </div>

                        <div class="form-group">
                            <label>UF (opcional)</label>
                            <input type="text" wire:model="uf" class="form-control" maxlength="2" placeholder="ex: MG">
                            @error('uf')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="salvar">
                                <span wire:loading.remove wire:target="salvar">Salvar</span>
                                <span wire:loading wire:target="salvar">Salvando...</span>
                            </button>
                            <a href="{{ route('estoque.fornecedores.index') }}" wire:navigate class="btn btn-link">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
