<?php

namespace App\Repositories\Contracts;

use App\Models\Configuracao;

interface ConfiguracaoRepositoryInterface extends RepositoryInterface
{
    public function obter(): ?Configuracao;

    public function atualizar(array $dados): Configuracao;
}
