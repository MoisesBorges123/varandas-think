<?php

namespace App\Services;

use App\DTO\Cardapio\DefinirPrecoDTO;
use App\DTO\Cardapio\ProdutoDTO;
use App\Models\PrecoProduto;
use App\Models\Produto;
use App\Repositories\Contracts\ProdutoRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Database\Eloquent\Collection;

class ProdutoService extends ServiceBase
{
    public function __construct(
        private readonly ProdutoRepositoryInterface $produtoRepository,
    ) {
    }

    public function listar(?string $busca = null, ?int $categoriaId = null, ?bool $ativo = null): Collection
    {
        return $this->produtoRepository->listar($busca, $categoriaId, $ativo);
    }

    /**
     * Cria o produto e já registra o preço inicial numa única transação —
     * produto sem preço não faz sentido operacional no Varandas.
     */
    public function criar(ProdutoDTO $dto, float $precoInicial): Produto
    {
        $dto->validate();

        return $this->transaction(function () use ($dto, $precoInicial) {
            $produto = $this->produtoRepository->create($dto->toArray());

            $this->produtoRepository->registrarPreco($produto->id, $precoInicial, $this->userId());

            return $this->produtoRepository->findOrFail($produto->id);
        });
    }

    public function atualizar(int $id, ProdutoDTO $dto): Produto
    {
        $dto->validate();

        $this->produtoRepository->update($id, $dto->toArray());

        return $this->produtoRepository->findOrFail($id);
    }

    /**
     * Preço é sempre histórico — insere um novo registro, nunca atualiza
     * o anterior (CLAUDE.md, seção 2).
     */
    public function definirPreco(DefinirPrecoDTO $dto): PrecoProduto
    {
        $dto->validate();

        return $this->produtoRepository->registrarPreco(
            $dto->getProdutoId(),
            $dto->getPreco(),
            $dto->getCreatedBy(),
        );
    }

    public function alternarAtivo(int $id): Produto
    {
        $produto = $this->produtoRepository->findOrFail($id);

        $this->produtoRepository->update($id, ['ativo' => ! $produto->ativo]);

        return $this->produtoRepository->findOrFail($id);
    }

    public function alternarDisponivel(int $id): Produto
    {
        $produto = $this->produtoRepository->findOrFail($id);

        $this->produtoRepository->update($id, ['disponivel' => ! $produto->disponivel]);

        return $this->produtoRepository->findOrFail($id);
    }
}
