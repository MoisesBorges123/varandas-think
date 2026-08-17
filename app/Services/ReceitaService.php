<?php

namespace App\Services;

use App\DTO\Estoque\ReceitaDTO;
use App\Models\Receita;
use App\Repositories\Contracts\ReceitaRepositoryInterface;
use App\Services\Base\ServiceBase;

class ReceitaService extends ServiceBase
{
    public function __construct(
        private readonly ReceitaRepositoryInterface $receitaRepository,
    ) {
    }

    public function buscarPorProduto(int $produtoId): ?Receita
    {
        return $this->receitaRepository->buscarPorProduto($produtoId);
    }

    /**
     * Cria a receita do produto se ainda não existir (um produto tem no
     * máximo uma receita) e substitui os itens por completo.
     */
    public function salvar(ReceitaDTO $dto): Receita
    {
        $dto->validate();

        return $this->transaction(function () use ($dto) {
            $receita = $this->receitaRepository->buscarPorProduto($dto->getProdutoId())
                ?? $this->receitaRepository->create(['produto_id' => $dto->getProdutoId()]);

            $this->receitaRepository->substituirItens($receita, $dto->getItens());

            return $this->receitaRepository->buscarPorProduto($dto->getProdutoId());
        });
    }
}
