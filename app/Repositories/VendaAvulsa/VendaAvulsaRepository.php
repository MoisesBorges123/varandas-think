<?php

namespace App\Repositories\VendaAvulsa;

use App\Models\VendaAvulsa;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\VendaAvulsaRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class VendaAvulsaRepository extends Repository implements VendaAvulsaRepositoryInterface
{
    public function __construct(VendaAvulsa $model)
    {
        parent::__construct($model);
    }

    public function listarRecentes(int $limite): Collection
    {
        return $this->query()
            ->with('produto')
            ->orderByDesc('created_at')
            ->limit($limite)
            ->get();
    }
}
