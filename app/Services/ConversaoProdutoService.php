<?php

namespace App\Services;

use App\DTO\Estoque\ConversaoProdutoDTO;
use App\Models\ConversaoProduto;
use App\Repositories\Contracts\ConversaoProdutoRepositoryInterface;
use App\Services\Base\ServiceBase;

class ConversaoProdutoService extends ServiceBase
{
    public function __construct(
        private readonly ConversaoProdutoRepositoryInterface $conversaoProdutoRepository,
    ) {
    }

    public function buscarPorProduto(int $produtoId): ?ConversaoProduto
    {
        return $this->conversaoProdutoRepository->buscarPorProduto($produtoId);
    }

    /**
     * Cria a conversão do produto se ainda não existir (um produto avulso
     * tem no máximo uma conversão cadastrada — CLAUDE.md seção 3.2) e
     * atualiza os dados caso já exista.
     */
    public function salvar(ConversaoProdutoDTO $dto): ConversaoProduto
    {
        $dto->validate();

        $conversao = $this->conversaoProdutoRepository->buscarPorProduto($dto->getProdutoId());

        if ($conversao) {
            $conversao->update($dto->toArray());

            return $conversao->fresh();
        }

        return $this->conversaoProdutoRepository->create($dto->toArray());
    }
}
