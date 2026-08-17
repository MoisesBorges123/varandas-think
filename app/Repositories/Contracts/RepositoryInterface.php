<?php

namespace App\Repositories\Contracts;

/**
 * Contrato base que todo Repository do Varandas deve implementar (via a
 * classe abstrata App\Repositories\Base\Repository, ou implementando
 * diretamente em casos raros de repositório sem Model Eloquent por trás).
 */
interface RepositoryInterface
{
    public function all();

    public function find($id);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);
}
