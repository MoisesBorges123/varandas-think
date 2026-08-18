<?php

namespace App\Services;

use App\DTO\NotaFiscal\CategoriaCompraDTO;
use App\Models\CategoriaCompra;
use App\Repositories\Contracts\CategoriaCompraRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Database\Eloquent\Collection;

class CategoriaCompraService extends ServiceBase
{
    public function __construct(
        private readonly CategoriaCompraRepositoryInterface $categoriaCompraRepository,
    ) {
    }

    public function listar(): Collection
    {
        return $this->categoriaCompraRepository->listar();
    }

    public function criar(CategoriaCompraDTO $dto): CategoriaCompra
    {
        $dto->validate();

        return $this->categoriaCompraRepository->create($dto->toArray());
    }
}
