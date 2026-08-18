<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Compra sem nota fiscal</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('estoque.ingredientes.index') }}" wire:navigate>Estoque</a></li>
                <li class="breadcrumb-item active">Compra manual</li>
            </ol>
        </div>
        <div class="page-rightheader">
            <a href="{{ route('estoque.fornecedores.criar') }}" wire:navigate class="btn btn-outline-secondary">
                <i class="fe fe-plus mr-1"></i> Novo fornecedor
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Dados da compra</h3>
                </div>
                <div class="card-body">
                    <form wire:submit="salvar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Fornecedor</label>
                                    <select wire:model="fornecedorId" class="form-control">
                                        <option value="">Selecione o fornecedor...</option>
                                        @foreach ($fornecedores as $fornecedor)
                                            <option value="{{ $fornecedor->id }}">{{ $fornecedor->razao_social }}</option>
                                        @endforeach
                                    </select>
                                    @error('fornecedorId')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Data da compra</label>
                                    <input type="date" wire:model="dataCompra" class="form-control">
                                    @error('dataCompra')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <hr>

                        <h4 class="mb-3">Itens</h4>

                        @foreach ($itens as $index => $item)
                            <div class="row mb-2 align-items-start" wire:key="item-{{ $index }}">
                                <div class="col-md-4">
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
                                <div class="col-md-2">
                                    <input type="text" wire:model="itens.{{ $index }}.quantidade" class="form-control" placeholder="Quantidade">
                                    @error("itens.{$index}.quantidade")
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <select wire:model="itens.{{ $index }}.unidade" class="form-control">
                                        <option value="">Unidade...</option>
                                        @foreach ($unidadesMedida as $unidade)
                                            <option value="{{ $unidade->value }}">{{ $unidade->label() }}</option>
                                        @endforeach
                                    </select>
                                    @error("itens.{$index}.unidade")
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <input type="text" wire:model="itens.{{ $index }}.valor_total_item" class="form-control" placeholder="Valor pago (R$)">
                                    @error("itens.{$index}.valor_total_item")
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-1">
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
                            <i class="fe fe-plus mr-1"></i> Adicionar item
                        </button>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="salvar">
                                <span wire:loading.remove wire:target="salvar">Registrar compra</span>
                                <span wire:loading wire:target="salvar">Salvando...</span>
                            </button>
                            <a href="{{ route('estoque.ingredientes.index') }}" wire:navigate class="btn btn-link">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
