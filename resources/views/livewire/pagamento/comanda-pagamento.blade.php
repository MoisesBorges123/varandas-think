<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Pagamento — Mesa {{ $comanda->mesa->numero }}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('comandas.index') }}" wire:navigate>Comandas</a></li>
                <li class="breadcrumb-item active">Pagamento</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <p class="text-muted small mb-1">Total da conta</p>
                    <h4 class="mb-0">R$ {{ number_format($extrato->valorTotalItens, 2, ',', '.') }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <p class="text-muted small mb-1">Já pago</p>
                    <h4 class="mb-0 text-success">R$ {{ number_format($extrato->totalPago, 2, ',', '.') }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <p class="text-muted small mb-1">Saldo restante</p>
                    <h4 class="mb-0 {{ $extrato->saldoRestante > 0 ? 'text-danger' : 'text-success' }}">
                        R$ {{ number_format($extrato->saldoRestante, 2, ',', '.') }}
                    </h4>
                </div>
            </div>
        </div>
    </div>

    @if ($extrato->saldoRestante <= 0)
        <div class="alert alert-success">Conta totalmente paga — a comanda será encerrada automaticamente.</div>
    @else
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title mb-0">Registrar pagamento</h3>
                        <div class="btn-group">
                            <button type="button" wire:click="$set('modo', 'itens')" class="btn btn-sm {{ $modo === 'itens' ? 'btn-primary' : 'btn-outline-primary' }}">Por itens</button>
                            <button type="button" wire:click="$set('modo', 'livre')" class="btn btn-sm {{ $modo === 'livre' ? 'btn-primary' : 'btn-outline-primary' }}">Valor livre</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nome do pagador <span class="text-muted">(opcional)</span></label>
                            <input type="text" wire:model="nomePagador" class="form-control">
                        </div>

                        @if ($modo === 'itens')
                            @forelse ($extrato->itensAbertos as $item)
                                <div class="custom-control custom-checkbox mb-2" wire:key="item-pagamento-{{ $item->id }}">
                                    <input
                                        type="checkbox"
                                        id="item-{{ $item->id }}"
                                        wire:click="alternarItem({{ $item->id }})"
                                        @checked($itensSelecionados[$item->id] ?? false)
                                        class="custom-control-input"
                                    >
                                    <label class="custom-control-label d-flex justify-content-between" for="item-{{ $item->id }}">
                                        <span>{{ $item->quantidade }}x {{ $item->produto->nome }}</span>
                                        <span>R$ {{ number_format($item->precoProduto->preco * $item->quantidade, 2, ',', '.') }}</span>
                                    </label>
                                </div>
                            @empty
                                <p class="text-muted small mb-0">Nenhum item em aberto.</p>
                            @endforelse

                            <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top">
                                <strong>Total selecionado</strong>
                                <strong>R$ {{ number_format($totalSelecionado, 2, ',', '.') }}</strong>
                            </div>
                        @else
                            <div class="form-group">
                                <label>Valor a pagar (R$)</label>
                                <input type="text" wire:model="valorLivre" class="form-control" placeholder="0,00">
                            </div>
                        @endif

                        <hr>
                        <p class="text-muted small mb-2">Como foi pago?</p>
                        <div class="d-flex flex-wrap" style="gap: .5rem;">
                            @foreach ($formasPagamento as $forma)
                                @php
                                    $semTerminal = $forma->precisaDeTerminal()
                                        && ! ($forma->value === 'api_point' ? $configuracao?->mp_device_id_balcao : $configuracao?->mp_device_id_portatil);
                                @endphp
                                <button
                                    type="button"
                                    wire:click="{{ $modo === 'itens' ? "pagarPorItens('{$forma->value}')" : "pagarValorLivre('{$forma->value}')" }}"
                                    wire:loading.attr="disabled"
                                    wire:target="pagarPorItens,pagarValorLivre"
                                    @disabled($semTerminal)
                                    class="btn btn-primary"
                                    title="{{ $semTerminal ? 'Configure o device_id dessa maquininha em Comandas > Configurações' : '' }}"
                                >
                                    {{ $forma->label() }}
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Histórico de pagamentos</h3>
                    </div>
                    <div class="card-body" style="max-height: 420px; overflow-y: auto;">
                        @forelse ($pagamentos as $pagamento)
                            <div class="d-flex justify-content-between align-items-start border-bottom py-2" wire:key="pagamento-{{ $pagamento->id }}">
                                <div>
                                    <div>{{ $pagamento->forma_pagamento->label() }} — {{ $pagamento->tipo->label() }}</div>
                                    <div class="text-muted small">
                                        {{ $pagamento->nome_pagador ?? '—' }} · {{ $pagamento->created_at->format('d/m H:i') }}
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div>R$ {{ number_format($pagamento->valor, 2, ',', '.') }}</div>
                                    <span class="badge {{ match($pagamento->status->value) {
                                        'confirmado' => 'badge-success',
                                        'pendente' => 'badge-warning',
                                        default => 'badge-danger',
                                    } }}">{{ $pagamento->status->label() }}</span>
                                </div>
                            </div>
                        @empty
                            <p class="text-muted small mb-0">Nenhum pagamento registrado ainda.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($pixExibido)
        <div class="pagamento-overlay">
            <div class="pagamento-overlay-fundo" wire:click="fecharQrPix"></div>
            <div class="pagamento-overlay-painel text-center">
                <h5 class="mb-3">Aponte a câmera para pagar via Pix</h5>
                @if ($pixExibido['qr_code_base64'])
                    <img src="data:image/png;base64,{{ $pixExibido['qr_code_base64'] }}" alt="QR Code Pix" class="img-fluid mb-3" style="max-width: 260px;">
                @endif
                @if ($pixExibido['qr_code'])
                    <p class="text-muted small">Ou copie o código:</p>
                    <textarea class="form-control mb-3" rows="3" readonly onclick="this.select()">{{ $pixExibido['qr_code'] }}</textarea>
                @endif
                <button type="button" wire:click="fecharQrPix" class="btn btn-primary btn-block">Fechar</button>
            </div>
        </div>
    @endif

    <style>
        .pagamento-overlay {
            position: fixed;
            inset: 0;
            z-index: 1050;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .pagamento-overlay-fundo {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, .5);
        }

        .pagamento-overlay-painel {
            position: relative;
            background: #fff;
            width: 100%;
            max-width: 360px;
            border-radius: .75rem;
            padding: 1.5rem;
        }
    </style>
</div>
