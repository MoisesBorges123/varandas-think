<?php

namespace App\Repositories\Notificacao;

use App\Models\Notificacao;
use App\Models\Usuario;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\NotificacaoRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class NotificacaoRepository extends Repository implements NotificacaoRepositoryInterface
{
    public function __construct(Notificacao $model)
    {
        parent::__construct($model);
    }

    public function paraUsuario(Usuario $usuario): Collection
    {
        return $this->query()
            ->paraUsuario($usuario)
            ->pendentes()
            ->orderByDesc('created_at')
            ->get();
    }

    public function resolverPorReferencia(string $tipo, string $referenciaTipo, int $referenciaId): void
    {
        $this->query()
            ->where('tipo', $tipo)
            ->where('referencia_tipo', $referenciaTipo)
            ->where('referencia_id', $referenciaId)
            ->pendentes()
            ->update(['resolvida_em' => now()]);
    }
}
