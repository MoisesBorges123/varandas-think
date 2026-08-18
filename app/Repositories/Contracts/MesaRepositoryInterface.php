<?php

namespace App\Repositories\Contracts;

use App\Models\Mesa;
use Illuminate\Database\Eloquent\Collection;

interface MesaRepositoryInterface extends RepositoryInterface
{
    public function listar(?string $busca = null): Collection;

    public function listarSemComandaAberta(): Collection;

    public function possuiComandaAberta(int $mesaId): bool;

    public function encontrarPorToken(string $token): ?Mesa;
}
