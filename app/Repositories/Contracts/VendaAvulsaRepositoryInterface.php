<?php

namespace App\Repositories\Contracts;

use App\Models\VendaAvulsa;
use Illuminate\Database\Eloquent\Collection;

interface VendaAvulsaRepositoryInterface extends RepositoryInterface
{
    public function listarRecentes(int $limite): Collection;

    /**
     * @param  array<int, array{produto_id: int, quantidade: int, preco_unitario: float, valor_total_item: float}>  $itens
     */
    public function criarComItens(array $dadosVenda, array $itens): VendaAvulsa;
}
