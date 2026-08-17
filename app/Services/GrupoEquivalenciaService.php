<?php

namespace App\Services;

use App\DTO\Estoque\GrupoEquivalenciaDTO;
use App\Models\GrupoEquivalencia;
use App\Repositories\Contracts\GrupoEquivalenciaRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Database\Eloquent\Collection;

class GrupoEquivalenciaService extends ServiceBase
{
    public function __construct(
        private readonly GrupoEquivalenciaRepositoryInterface $grupoRepository,
    ) {
    }

    public function listar(?string $busca = null): Collection
    {
        return $this->grupoRepository->listar($busca);
    }

    public function criar(GrupoEquivalenciaDTO $dto): GrupoEquivalencia
    {
        $dto->validate();

        return $this->grupoRepository->create($dto->toArray());
    }

    public function atualizar(int $id, GrupoEquivalenciaDTO $dto): GrupoEquivalencia
    {
        $dto->validate();

        $this->grupoRepository->update($id, $dto->toArray());

        return $this->grupoRepository->findOrFail($id);
    }

    public function excluir(int $id): bool
    {
        $this->throwIf(
            $this->grupoRepository->countIngredientesVinculados($id) > 0,
            'Este grupo de equivalência possui insumos vinculados e não pode ser excluído.',
        );

        return $this->grupoRepository->delete($id);
    }
}
