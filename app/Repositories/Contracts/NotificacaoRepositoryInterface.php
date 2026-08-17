<?php

namespace App\Repositories\Contracts;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Collection;

interface NotificacaoRepositoryInterface extends RepositoryInterface
{
    public function paraUsuario(Usuario $usuario): Collection;

    public function resolverPorReferencia(string $tipo, string $referenciaTipo, int $referenciaId): void;
}
