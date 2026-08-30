<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface VendaAvulsaRepositoryInterface extends RepositoryInterface
{
    public function listarRecentes(int $limite): Collection;
}
