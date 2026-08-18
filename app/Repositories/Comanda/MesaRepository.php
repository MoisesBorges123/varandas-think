<?php

namespace App\Repositories\Comanda;

use App\Enums\Comanda\StatusComanda;
use App\Models\Mesa;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\MesaRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class MesaRepository extends Repository implements MesaRepositoryInterface
{
    public function __construct(Mesa $model)
    {
        parent::__construct($model);
    }

    public function listar(?string $busca = null): Collection
    {
        return $this->query()
            ->when($busca, fn ($query) => $query->where('numero', 'like', "%{$busca}%"))
            ->orderBy('numero')
            ->get();
    }

    public function listarSemComandaAberta(): Collection
    {
        return $this->query()
            ->whereDoesntHave('comandas', fn ($query) => $query->where('status', StatusComanda::ABERTA->value))
            ->orderBy('numero')
            ->get();
    }

    public function possuiComandaAberta(int $mesaId): bool
    {
        return $this->model->findOrFail($mesaId)
            ->comandas()
            ->where('status', StatusComanda::ABERTA->value)
            ->exists();
    }

    public function encontrarPorToken(string $token): ?Mesa
    {
        return $this->query()->where('token', $token)->first();
    }
}
