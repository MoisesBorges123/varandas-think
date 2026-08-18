<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Conversão de unidade — {{ $produto->nome }}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('cardapio.produtos.index') }}" wire:navigate>Produtos</a></li>
                <li class="breadcrumb-item active">Conversão</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Compra x venda</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Explica de onde esse produto de venda avulsa baixa estoque, e quantas unidades de venda
                        cada unidade de compra rende (ex.: 1 caixa com 48 garrafas rende 48 unidades vendidas).
                    </p>

                    <form wire:submit="salvar">
                        <div class="form-group">
                            <label>Insumo (grupo de equivalência)</label>
                            <select wire:model="grupoEquivalenciaId" class="form-control">
                                <option value="">Selecione o insumo...</option>
                                @foreach ($gruposDisponiveis as $grupo)
                                    <option value="{{ $grupo->id }}">{{ $grupo->nome }}</option>
                                @endforeach
                            </select>
                            @error('grupoEquivalenciaId')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Unidade de compra</label>
                            <input type="text" wire:model="unidadeCompra" class="form-control" placeholder="ex: CX, pacote, kg">
                            @error('unidadeCompra')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Quantidade por unidade de compra</label>
                            <input type="text" wire:model="quantidadeUnidadeCompra" class="form-control" placeholder="ex: 1">
                            @error('quantidadeUnidadeCompra')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Rende quantas unidades de venda</label>
                            <input type="text" wire:model="rendeQuantidadeVenda" class="form-control" placeholder="ex: 48">
                            @error('rendeQuantidadeVenda')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="salvar">
                                <span wire:loading.remove wire:target="salvar">Salvar conversão</span>
                                <span wire:loading wire:target="salvar">Salvando...</span>
                            </button>
                            <a href="{{ route('cardapio.produtos.index') }}" wire:navigate class="btn btn-link">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
