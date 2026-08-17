<?php

namespace App\Services;

use App\DTO\Notificacao\NotificacaoDTO;
use App\Enums\Notificacao\TipoNotificacao;
use App\Enums\Usuario\PerfilNome;
use App\Models\Perfil;
use App\Repositories\Contracts\NotificacaoRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class NotificacaoService extends ServiceBase
{
    public function __construct(
        private readonly NotificacaoRepositoryInterface $notificacaoRepository,
    ) {
    }

    public function notificarPerfil(
        PerfilNome $perfilNome,
        TipoNotificacao $tipo,
        string $titulo,
        string $mensagem,
        ?string $referenciaTipo = null,
        ?int $referenciaId = null,
    ): void {
        $perfil = Perfil::where('nome', $perfilNome->value)->first();

        $this->throwUnless((bool) $perfil, 'Perfil de destino da notificação não encontrado.');

        $dto = (new NotificacaoDTO())
            ->setPerfilId($perfil->id)
            ->setTipo($tipo)
            ->setTitulo($titulo)
            ->setMensagem($mensagem)
            ->setReferenciaTipo($referenciaTipo)
            ->setReferenciaId($referenciaId)
            ->validate();

        $this->notificacaoRepository->create($dto->toArray());
    }

    public function resolverPorReferencia(TipoNotificacao $tipo, string $referenciaTipo, int $referenciaId): void
    {
        $this->notificacaoRepository->resolverPorReferencia($tipo->value, $referenciaTipo, $referenciaId);
    }

    public function pendentesParaUsuarioAutenticado(): Collection
    {
        if (! Auth::check()) {
            return new Collection();
        }

        return $this->notificacaoRepository->paraUsuario(Auth::user());
    }
}
