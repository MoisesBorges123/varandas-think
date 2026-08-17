<?php

namespace App\Repositories\Estoque;

use App\Models\Receita;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\ReceitaRepositoryInterface;

class ReceitaRepository extends Repository implements ReceitaRepositoryInterface
{
    public function __construct(Receita $model)
    {
        parent::__construct($model);
    }

    public function buscarPorProduto(int $produtoId): ?Receita
    {
        return $this->query()
            ->with('ingredientes')
            ->where('produto_id', $produtoId)
            ->first();
    }

    /**
     * Substitui por completo os itens da receita (ficha técnica não tem
     * histórico granular por item — a substituição inteira é o padrão
     * usado neste projeto para esse cadastro).
     */
    public function substituirItens(Receita $receita, array $itens): void
    {
        $receita->ingredientes()->detach();

        foreach ($itens as $item) {
            $receita->ingredientes()->attach($item['ingrediente_id'], [
                'quantidade' => $item['quantidade'],
                'unidade_medida' => $item['unidade_medida'],
            ]);
        }
    }
}
