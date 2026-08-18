<?php

namespace App\Repositories\Comanda;

use App\Enums\Comanda\StatusComanda;
use App\Models\Comanda;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\ComandaRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ComandaRepository extends Repository implements ComandaRepositoryInterface
{
    public function __construct(Comanda $model)
    {
        parent::__construct($model);
    }

    public function listar(array $filtros): Collection
    {
        return $this->query()
            ->with(['mesa', 'garcom'])
            ->when($filtros['status'] ?? null, fn ($query, $status) => $query->where('status', $status))
            ->when($filtros['mesa_id'] ?? null, fn ($query, $mesaId) => $query->where('mesa_id', $mesaId))
            ->when($filtros['garcom_id'] ?? null, fn ($query, $garcomId) => $query->where('garcom_id', $garcomId))
            ->orderByDesc('aberta_em')
            ->get();
    }

    public function findByToken(string $token): ?Comanda
    {
        return $this->query()->with(['mesa', 'garcom'])->where('token', $token)->first();
    }

    public function abertaPorMesa(int $mesaId): ?Comanda
    {
        return $this->query()
            ->where('mesa_id', $mesaId)
            ->where('status', StatusComanda::ABERTA->value)
            ->first();
    }

    public function encontrarComRelacoes(int $comandaId): Comanda
    {
        return $this->query()->with(['mesa', 'garcom'])->findOrFail($comandaId);
    }
}
