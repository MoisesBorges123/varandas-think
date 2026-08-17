<?php

namespace App\Services;

use App\DTO\Estoque\IngredienteDTO;
use App\Enums\Notificacao\TipoNotificacao;
use App\Enums\Usuario\PerfilNome;
use App\Models\Ingrediente;
use App\Repositories\Contracts\IngredienteRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Database\Eloquent\Collection;

class IngredienteService extends ServiceBase
{
    public function __construct(
        private readonly IngredienteRepositoryInterface $ingredienteRepository,
        private readonly NotificacaoService $notificacaoService,
    ) {
    }

    public function listar(?string $busca = null, ?bool $semGrupo = null): Collection
    {
        return $this->ingredienteRepository->listar($busca, $semGrupo);
    }

    public function criar(IngredienteDTO $dto): Ingrediente
    {
        $dto->validate();

        return $this->transaction(function () use ($dto) {
            $ingrediente = $this->ingredienteRepository->create($dto->toArray());

            if ($dto->getGrupoEquivalenciaId() === null) {
                $this->notificarSemGrupo($ingrediente);
            }

            return $ingrediente;
        });
    }

    public function atualizar(int $id, IngredienteDTO $dto): Ingrediente
    {
        $dto->validate();

        return $this->transaction(function () use ($id, $dto) {
            $ingredienteAntes = $this->ingredienteRepository->findOrFail($id);
            $estavaSemGrupo = $ingredienteAntes->estaSemGrupo();

            $this->ingredienteRepository->update($id, $dto->toArray());

            $ingrediente = $this->ingredienteRepository->findOrFail($id);

            if ($estavaSemGrupo && $dto->getGrupoEquivalenciaId() !== null) {
                $this->notificacaoService->resolverPorReferencia(
                    TipoNotificacao::INGREDIENTE_SEM_GRUPO,
                    'ingrediente',
                    $ingrediente->id,
                );
            } elseif (! $estavaSemGrupo && $dto->getGrupoEquivalenciaId() === null) {
                $this->notificarSemGrupo($ingrediente);
            }

            return $ingrediente;
        });
    }

    public function excluir(int $id): bool
    {
        $this->throwIf(
            $this->ingredienteRepository->countReceitasVinculadas($id) > 0,
            'Este insumo está vinculado a uma ou mais receitas e não pode ser excluído.',
        );

        return $this->ingredienteRepository->delete($id);
    }

    private function notificarSemGrupo(Ingrediente $ingrediente): void
    {
        $this->notificacaoService->notificarPerfil(
            PerfilNome::ADMINISTRADOR,
            TipoNotificacao::INGREDIENTE_SEM_GRUPO,
            'Insumo sem grupo de equivalência',
            sprintf('O insumo "%s" foi cadastrado sem grupo de equivalência vinculado.', $ingrediente->nome),
            'ingrediente',
            $ingrediente->id,
        );
    }
}
