<?php

namespace App\Services;

use App\DTO\Cardapio\CategoriaDTO;
use App\Models\Categoria;
use App\Repositories\Contracts\CategoriaRepositoryInterface;
use App\Repositories\Contracts\ProdutoRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Database\Eloquent\Collection;

class CategoriaService extends ServiceBase
{
    public function __construct(
        private readonly CategoriaRepositoryInterface $categoriaRepository,
        private readonly ProdutoRepositoryInterface $produtoRepository,
    ) {
    }

    public function listar(?string $busca = null, ?bool $ativo = null): Collection
    {
        return $this->categoriaRepository->listar($busca, $ativo);
    }

    public function criar(CategoriaDTO $dto): Categoria
    {
        $dto->validate();

        return $this->categoriaRepository->create($dto->toArray());
    }

    public function atualizar(int $id, CategoriaDTO $dto): Categoria
    {
        $dto->validate();

        $this->categoriaRepository->update($id, $dto->toArray());

        return $this->categoriaRepository->findOrFail($id);
    }

    public function alternarAtivo(int $id): Categoria
    {
        $categoria = $this->categoriaRepository->findOrFail($id);

        $this->categoriaRepository->update($id, ['ativo' => ! $categoria->ativo]);

        return $this->categoriaRepository->findOrFail($id);
    }

    public function excluir(int $id): bool
    {
        $this->throwIf(
            $this->produtoRepository->countPorCategoria($id) > 0,
            'Esta categoria possui produtos vinculados e não pode ser excluída.',
        );

        return $this->categoriaRepository->delete($id);
    }
}
