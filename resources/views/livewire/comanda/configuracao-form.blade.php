<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Configurações</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('painel') }}" wire:navigate>Painel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('comandas.index') }}" wire:navigate>Comandas</a></li>
                <li class="breadcrumb-item active">Configurações</li>
            </ol>
        </div>
    </div>

    <form wire:submit="salvar">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Raio de acesso do cliente</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">
                            Define de onde o cliente consegue abrir/acessar a comanda pelo link do QR code
                            (CLAUDE.md seção 4.4). Ajuste o raio conforme o espaço físico real do bar.
                        </p>

                        <div class="form-group">
                            <label>Latitude</label>
                            <input type="text" wire:model="latitude" id="config-latitude" class="form-control" placeholder="-23.5505000">
                            @error('latitude')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Longitude</label>
                            <input type="text" wire:model="longitude" id="config-longitude" class="form-control" placeholder="-46.6333000">
                            @error('longitude')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="button" id="usar-localizacao-atual" class="btn btn-outline-secondary btn-sm mb-3">
                            <i class="fe fe-crosshair mr-1"></i> Usar minha localização atual
                        </button>

                        <div class="form-group mb-0">
                            <label>Raio (metros)</label>
                            <input type="text" wire:model="raioMetros" class="form-control" placeholder="100">
                            @error('raioMetros')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Regras de pedidos</h3>
                    </div>
                    <div class="card-body">
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" id="validacao-estoque" wire:model="validacaoEstoqueAutomaticaAtiva" class="custom-control-input">
                            <label class="custom-control-label" for="validacao-estoque">Validar estoque automaticamente ao aprovar pedidos</label>
                            <small class="form-text text-muted">CLAUDE.md seção 4.3 — checa se há ingrediente suficiente antes de enviar à cozinha.</small>
                        </div>

                        <hr>

                        <p class="text-muted mb-2">Cancelar/excluir item de outro colega (CLAUDE.md seção 10):</p>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" id="cancelar-colega" wire:model="permitirGarcomCancelarItemColega" class="custom-control-input">
                            <label class="custom-control-label" for="cancelar-colega">Garçom pode cancelar item lançado por outro colega</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" id="excluir-proprio" wire:model="permitirGarcomExcluirProprioItem" class="custom-control-input">
                            <label class="custom-control-label" for="excluir-proprio">Garçom pode excluir pedido que ele mesmo cadastrou</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-0">
                            <input type="checkbox" id="excluir-colega" wire:model="permitirGarcomExcluirItemColega" class="custom-control-input">
                            <label class="custom-control-label" for="excluir-colega">Garçom pode excluir pedido de outro colega</label>
                        </div>

                        <small class="form-text text-muted mt-3">
                            Regra fixa, não configurável: depois que um item é enviado à cozinha ou marcado
                            pronto, só o balcão pode cancelar ou excluir.
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title mb-0">Maquininhas Mercado Pago</h3>
                        <button type="button" wire:click="atualizarTerminais" wire:loading.attr="disabled" wire:target="atualizarTerminais" class="btn btn-sm btn-outline-primary">
                            <span wire:loading.remove wire:target="atualizarTerminais"><i class="fe fe-refresh-cw mr-1"></i> Buscar maquininhas vinculadas</span>
                            <span wire:loading wire:target="atualizarTerminais">Buscando...</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">
                            Identificador (device_id/terminal_id) dos terminais Point vinculados à conta
                            Mercado Pago (CLAUDE.md seção 6) — sem isso, a forma de pagamento correspondente
                            fica desabilitada na tela de pagamento.
                        </p>

                        @if ($erroTerminais)
                            <div class="alert alert-warning">{{ $erroTerminais }}</div>
                        @endif

                        @if ($jaBuscouTerminais && ! $erroTerminais)
                            <div class="mb-3">
                                @forelse ($terminaisDisponiveis as $terminal)
                                    <div class="d-flex justify-content-between align-items-center border rounded p-2 mb-2" wire:key="terminal-{{ $terminal['id'] }}">
                                        <div>
                                            <div class="font-weight-bold">{{ $terminal['id'] }}</div>
                                            <div class="text-muted small">
                                                @if ($terminal['operating_mode'])
                                                    {{ $terminal['operating_mode'] }}
                                                @endif
                                                @if ($terminal['pos_id'])
                                                    · POS {{ $terminal['pos_id'] }}
                                                @endif
                                            </div>
                                        </div>
                                        <div>
                                            <button type="button" wire:click="selecionarTerminalBalcao('{{ $terminal['id'] }}')" class="btn btn-sm btn-outline-secondary">Usar como balcão</button>
                                            <button type="button" wire:click="selecionarTerminalPortatil('{{ $terminal['id'] }}')" class="btn btn-sm btn-outline-secondary">Usar como portátil</button>
                                        </div>
                                    </div>
                                @empty
                                    <p class="text-muted small mb-0" id="nenhuma-maquininha-encontrada">
                                        Nenhuma maquininha encontrada na conta ainda. Isso é esperado até você
                                        emparelhar um terminal físico ou portátil pelo app Point da Mercado
                                        Pago — a lista aqui só reflete terminais já emparelhados, não cria um
                                        pareamento novo. Enquanto isso, preencha o identificador manualmente
                                        abaixo se já souber qual é.
                                    </p>
                                @endforelse
                            </div>
                        @endif

                        <div class="form-group">
                            <label>Maquininha do balcão (API Point)</label>
                            <input type="text" wire:model="mpDeviceIdBalcao" class="form-control" placeholder="ex: NEWLAND_N950__N950NCB801293324">
                        </div>

                        <div class="form-group mb-0">
                            <label>Maquininha portátil (celular do garçom)</label>
                            <input type="text" wire:model="mpDeviceIdPortatil" class="form-control" placeholder="ex: PAX_A910__A910123456789">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="salvar">
            <span wire:loading.remove wire:target="salvar">Salvar</span>
            <span wire:loading wire:target="salvar">Salvando...</span>
        </button>
    </form>

    @script
    <script>
        $wire.$el.querySelector('#usar-localizacao-atual')?.addEventListener('click', () => {
            if (!navigator.geolocation) {
                return;
            }

            navigator.geolocation.getCurrentPosition((posicao) => {
                $wire.set('latitude', String(posicao.coords.latitude));
                $wire.set('longitude', String(posicao.coords.longitude));
            });
        });
    </script>
    @endscript
</div>
