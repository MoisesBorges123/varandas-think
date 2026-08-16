<?php

namespace App\Repositories\Base;

use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Traits\TraitsBd;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Classe base para os Repositories do projeto Varandas.
 *
 * Centraliza as operações CRUD comuns a todas as entidades. Repositories
 * concretos (ex.: PedidoRepository, ComandaRepository) devem estender
 * esta classe e adicionar SOMENTE os métodos específicos daquela
 * entidade — nunca duplicar all()/find()/create()/update()/delete() nos
 * repositórios filhos.
 */
abstract class Repository implements RepositoryInterface
{
    use TraitsBd;

    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    public function findOrFail($id): Model
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    public function update($id, array $data): bool
    {
        $record = $this->find($id);

        return $record ? $record->update($data) : false;
    }

    public function delete($id): bool
    {
        $record = $this->find($id);

        return $record ? $record->delete() : false;
    }

    /**
     * Ponto de partida para queries customizadas nos repositories
     * concretos, mantendo o acoplamento ao Eloquent isolado nesta
     * camada (o Service nunca deve montar Query Builder diretamente).
     */
    protected function query(): Builder
    {
        return $this->model->newQuery();
    }
}
