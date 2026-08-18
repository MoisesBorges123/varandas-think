<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Importar nota fiscal</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('estoque.ingredientes.index') }}" wire:navigate>Estoque</a></li>
                <li class="breadcrumb-item active">Importar nota fiscal</li>
            </ol>
        </div>
    </div>

    @if ($secao === 'leitura')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <button type="button" wire:click="selecionarAba('camera')" class="nav-link {{ $aba === 'camera' ? 'active' : '' }}">
                                    <i class="fa fa-qrcode mr-1"></i> Câmera
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" wire:click="selecionarAba('chave')" class="nav-link {{ $aba === 'chave' ? 'active' : '' }}">
                                    <i class="fa fa-key mr-1"></i> Chave de acesso
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" wire:click="selecionarAba('xml')" class="nav-link {{ $aba === 'xml' ? 'active' : '' }}">
                                    <i class="fa fa-file-code-o mr-1"></i> Upload de XML
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        @if ($aba === 'camera')
                            <p class="text-muted">
                                Aponte a câmera para o QR code do cupom fiscal ou para o código de barras
                                da DANFE (nota fiscal de fornecedor). O sistema identifica sozinho qual é qual.
                            </p>
                            <div id="reader" style="max-width: 500px;" wire:ignore></div>
                        @elseif ($aba === 'chave')
                            <form wire:submit="buscarPorChaveManual" class="row align-items-end">
                                <div class="col-md-8 form-group">
                                    <label>Chave de acesso (44 dígitos)</label>
                                    <input type="text" wire:model="chaveManual" maxlength="44" class="form-control" placeholder="Só números, sem espaços">
                                    @error('chaveManual')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group">
                                    <button type="submit" class="btn btn-primary btn-block" wire:loading.attr="disabled" wire:target="buscarPorChaveManual">
                                        <span wire:loading.remove wire:target="buscarPorChaveManual">Buscar</span>
                                        <span wire:loading wire:target="buscarPorChaveManual">Buscando...</span>
                                    </button>
                                </div>
                            </form>
                        @else
                            <form wire:submit="enviarXml" class="row align-items-end">
                                <div class="col-md-8 form-group">
                                    <label>Arquivo XML da nota</label>
                                    <input type="file" wire:model="xmlFile" accept=".xml" class="form-control">
                                    @error('xmlFile')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group">
                                    <button type="submit" class="btn btn-primary btn-block" wire:loading.attr="disabled" wire:target="enviarXml">
                                        <span wire:loading.remove wire:target="enviarXml">Importar XML</span>
                                        <span wire:loading wire:target="enviarXml">Lendo...</span>
                                    </button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @push('scripts')
            @vite(['resources/js/html5-qrcode-bridge.js'])
            <script>
                document.addEventListener('livewire:navigated', function iniciar() {
                    if (document.getElementById('reader') && typeof window.iniciarScannerNotaFiscal === 'function') {
                        window.iniciarScannerNotaFiscal('reader');
                    }
                });
                if (document.getElementById('reader') && typeof window.iniciarScannerNotaFiscal === 'function') {
                    window.iniciarScannerNotaFiscal('reader');
                }
            </script>
        @endpush
    @else
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Itens da nota
                            ({{ count($itensSelecionados) }} de {{ count($dadosNota['itens'] ?? []) }} selecionados)
                        </h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-group mb-3">
                            @foreach ($dadosNota['itens'] ?? [] as $indice => $item)
                                <li class="list-group-item">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" wire:model="itensSelecionados" value="{{ $indice }}" class="custom-control-input">
                                        <span class="custom-control-label d-flex justify-content-between">
                                            <span>{{ $item['descricao'] }} — {{ $item['quantidade'] }} {{ $item['unidade'] }}</span>
                                            <span class="font-weight-bold">R$ {{ number_format($item['valor_total_item'], 2, ',', '.') }}</span>
                                        </span>
                                    </label>
                                </li>
                            @endforeach
                        </ul>

                        <button type="button" wire:click="voltarParaLeitura" class="btn btn-link">Cancelar e voltar</button>
                        <button type="button" wire:click="confirmarImportacao" class="btn btn-primary float-right" wire:loading.attr="disabled" wire:target="confirmarImportacao">
                            <span wire:loading.remove wire:target="confirmarImportacao">Confirmar importação</span>
                            <span wire:loading wire:target="confirmarImportacao">Importando...</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="text-white">Fornecedor</h5>
                        <p class="mb-1">{{ $dadosNota['fornecedor_razao_social'] ?? '—' }}</p>
                        <p class="mb-0 small">CNPJ: {{ $dadosNota['fornecedor_cnpj'] ?? '—' }}</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5>Total da nota</h5>
                        <h2 class="font-weight-bold">R$ {{ number_format($dadosNota['valor_total'] ?? 0, 2, ',', '.') }}</h2>
                        <p class="text-muted small mb-0">Chave de acesso: {{ $dadosNota['chave_acesso'] ?? '—' }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
