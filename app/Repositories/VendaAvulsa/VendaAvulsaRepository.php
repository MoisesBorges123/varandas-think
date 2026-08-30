<?php

namespace App\Repositories\VendaAvulsa;

use App\Models\VendaAvulsa;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\VendaAvulsaRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class VendaAvulsaRepository extends Repository implements VendaAvulsaRepositoryInterface
{
    public function __construct(VendaAvulsa $model)
    {
        parent::__construct($model);
    }

    public function listarRecentes(int $limite): Collection
    {
        return $this->query()
            ->with('itens.produto')
            ->orderByDesc('created_at')
            ->limit($limite)
            ->get();
    }

    public function criarComItens(array $dadosVenda, array $itens): VendaAvulsa
    {
        $venda = $this->create($dadosVenda);

        foreach ($itens as $item) {
            $venda->itens()->create($item);
        }

        return $venda->load('itens.produto');
    }
}
