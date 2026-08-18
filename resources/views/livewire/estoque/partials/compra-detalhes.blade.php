<div class="text-left">
    <div class="row mb-3">
        <div class="col-md-6">
            <strong>Fornecedor:</strong><br>
            {{ $compra->fornecedor->razao_social }}
            @if ($compra->fornecedor->cnpj)
                <span class="text-muted">({{ $compra->fornecedor->cnpj }})</span>
            @endif
        </div>
        <div class="col-md-3">
            <strong>Data:</strong><br>
            {{ $compra->data_compra->format('d/m/Y') }}
        </div>
        <div class="col-md-3">
            <strong>Origem:</strong><br>
            {{ $compra->fonte->label() }}
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <strong>Categoria:</strong><br>
            {{ $compra->categoriaCompra->nome ?? 'Sem categoria' }}
        </div>
        <div class="col-md-3">
            <strong>Status:</strong><br>
            @if ($compra->trashed())
                <span class="badge badge-danger">Excluída</span>
            @else
                <span class="badge badge-success">Ativa</span>
            @endif
        </div>
        <div class="col-md-3">
            <strong>Valor total:</strong><br>
            R$ {{ number_format($compra->valor_total, 2, ',', '.') }}
        </div>
    </div>

    <hr>

    <div class="table-responsive">
        <table class="table table-sm table-striped">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantidade</th>
                    <th>Preço unitário</th>
                    <th>Valor total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($compra->itens as $item)
                    <tr>
                        <td>{{ $item->descricao_produto }}</td>
                        <td>{{ rtrim(rtrim(number_format($item->quantidade, 3, ',', '.'), '0'), ',') }} {{ $item->unidade }}</td>
                        <td>R$ {{ number_format($item->preco_unitario, 4, ',', '.') }}</td>
                        <td>R$ {{ number_format($item->valor_total_item, 2, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
