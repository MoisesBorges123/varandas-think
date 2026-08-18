<?php

namespace App\Repositories\Comanda;

use App\Models\Configuracao;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\ConfiguracaoRepositoryInterface;

class ConfiguracaoRepository extends Repository implements ConfiguracaoRepositoryInterface
{
    public function __construct(Configuracao $model)
    {
        parent::__construct($model);
    }

    public function obter(): ?Configuracao
    {
        return $this->query()->find(1);
    }

    /**
     * Singleton — sempre a mesma linha (id=1), nunca cria uma segunda.
     */
    public function atualizar(array $dados): Configuracao
    {
        return $this->model->updateOrCreate(['id' => 1], $dados);
    }
}
