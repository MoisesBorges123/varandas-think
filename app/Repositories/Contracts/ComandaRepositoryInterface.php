<?php

namespace App\Repositories\Contracts;

use App\Models\Comanda;
use Illuminate\Database\Eloquent\Collection;

interface ComandaRepositoryInterface extends RepositoryInterface
{
    /**
     * @param  array{status?: ?string, mesa_id?: ?int, garcom_id?: ?int}  $filtros
     */
    public function listar(array $filtros): Collection;

    public function findByToken(string $token): ?Comanda;

    public function abertaPorMesa(int $mesaId): ?Comanda;

    public function encontrarComRelacoes(int $comandaId): Comanda;
}
