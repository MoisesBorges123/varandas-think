<?php

namespace App\Services;

use App\DTO\Estoque\IngredienteDTO;
use App\Enums\Notificacao\TipoNotificacao;
use App\Enums\Usuario\PerfilNome;
use App\Models\Ingrediente;
use App\Repositories\Contracts\GrupoEquivalenciaRepositoryInterface;
use App\Repositories\Contracts\IngredienteRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Database\Eloquent\Collection;

class IngredienteService extends ServiceBase
{
    public function __construct(
        private readonly IngredienteRepositoryInterface $ingredienteRepository,
        private readonly NotificacaoService $notificacaoService,
        private readonly GrupoEquivalenciaRepositoryInterface $grupoRepository,
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

    /**
     * Usado pela importação de nota fiscal (CLAUDE.md, seção 3.1): insumo
     * novo nasce sem grupo de equivalência, o que já dispara a notificação
     * de pendência via criar() — nenhuma revisão manual antes de salvar
     * (decisão explícita do CLAUDE.md).
     */
    public function encontrarOuCriarPorCodigoFiscal(string $codigoFiscal, string $nome, string $unidadeMedida): Ingrediente
    {
        $existente = $this->ingredienteRepository->encontrarPorCodigoFiscal($codigoFiscal);

        if ($existente) {
            return $existente;
        }

        $dto = (new IngredienteDTO())
            ->setNome($nome)
            ->setUnidadeMedida($unidadeMedida)
            ->setCodigoFiscal($codigoFiscal);

        return $this->criar($dto);
    }

    public function atualizar(int $id, IngredienteDTO $dto): Ingrediente
    {
        $dto->validate();

        return $this->transaction(function () use ($id, $dto) {
            $ingredienteAntes = $this->ingredienteRepository->findOrFail($id);
            $estavaSemGrupo = $ingredienteAntes->estaSemGrupo();
            $grupoAntesId = $ingredienteAntes->grupo_equivalencia_id;

            $this->ingredienteRepository->update($id, $dto->toArray());

            $ingrediente = $this->ingredienteRepository->findOrFail($id);
            $grupoDepoisId = $ingrediente->grupo_equivalencia_id;

            if ($estavaSemGrupo && $dto->getGrupoEquivalenciaId() !== null) {
                $this->notificacaoService->resolverPorReferencia(
                    TipoNotificacao::INGREDIENTE_SEM_GRUPO,
                    'ingrediente',
                    $ingrediente->id,
                );
            } elseif (! $estavaSemGrupo && $dto->getGrupoEquivalenciaId() === null) {
                $this->notificarSemGrupo($ingrediente);
            }

            // O histórico de compras desse insumo (itens_compra) passa a
            // contar — ou deixa de contar — no custo médio ponderado do
            // grupo antigo/novo. Sem isso, vincular um insumo a um grupo
            // DEPOIS de já ter compras importadas deixa o custo médio
            // zerado pra sempre (só recalcula automaticamente em compras
            // NOVAS, não nas que já existiam antes do vínculo).
            if ($grupoAntesId !== $grupoDepoisId) {
                foreach (array_filter([$grupoAntesId, $grupoDepoisId]) as $grupoId) {
                    $this->grupoRepository->recalcularCustoMedioPonderado($grupoId);
                }
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
