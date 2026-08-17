<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Receita — {{ $produto->nome }}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('cardapio.produtos.index') }}" wire:navigate>Produtos</a></li>
                <li class="breadcrumb-item active">Receita</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ficha técnica</h3>
                </div>
                <div class="card-body">
                    <form wire:submit="salvar">
                        @foreach ($itens as $index => $item)
                            <div class="row mb-2" wire:key="item-{{ $index }}">
                                <div class="col-5">
                                    <select wire:model="itens.{{ $index }}.ingrediente_id" class="form-control">
                                        <option value="">Selecione o insumo...</option>
                                        @foreach ($ingredientesDisponiveis as $ingrediente)
                                            <option value="{{ $ingrediente->id }}">{{ $ingrediente->nome }}</option>
                                        @endforeach
                                    </select>
                                    @error("itens.{$index}.ingrediente_id")
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-3">
                                    <input type="text" wire:model="itens.{{ $index }}.quantidade" class="form-control" placeholder="Quantidade">
                                    @error("itens.{$index}.quantidade")
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-3">
                                    <input type="text" wire:model="itens.{{ $index }}.unidade_medida" class="form-control" placeholder="Unidade">
                                    @error("itens.{$index}.unidade_medida")
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-1">
                                    <button type="button" wire:click="removerLinha({{ $index }})" class="btn btn-icon btn-danger" title="Remover">
                                        <i class="fe fe-x"></i>
                                    </button>
                                </div>
                            </div>
                        @endforeach

                        @error('itens')
                            <div class="text-danger small mb-2">{{ $message }}</div>
                        @enderror

                        <button type="button" wire:click="adicionarLinha" class="btn btn-outline-secondary btn-sm mb-3">
                            <i class="fe fe-plus mr-1"></i> Adicionar ingrediente
                        </button>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="salvar">
                                <span wire:loading.remove wire:target="salvar">Salvar receita</span>
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
