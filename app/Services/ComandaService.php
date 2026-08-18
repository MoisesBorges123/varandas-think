<?php

namespace App\Services;

use App\DTO\Comanda\AbrirComandaDTO;
use App\Enums\Comanda\StatusComanda;
use App\Models\Comanda;
use App\Repositories\Contracts\ComandaRepositoryInterface;
use App\Repositories\Contracts\MesaRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;

class ComandaService extends ServiceBase
{
    public function __construct(
        private readonly ComandaRepositoryInterface $comandaRepository,
        private readonly MesaRepositoryInterface $mesaRepository,
    ) {
    }

    /**
     * @param  array{status?: ?string, mesa_id?: ?int, garcom_id?: ?int}  $filtros
     */
    public function listar(array $filtros): Collection
    {
        return $this->comandaRepository->listar($filtros);
    }

    public function encontrarPorToken(string $token): ?Comanda
    {
        return $this->comandaRepository->findByToken($token);
    }

    public function encontrarComRelacoes(int $comandaId): Comanda
    {
        return $this->comandaRepository->encontrarComRelacoes($comandaId);
    }

    /**
     * Abre uma comanda nova pra mesa — pelo garçom/balcão (painel) ou
     * pelo cliente via QR code (App\Livewire\Publico\MesaAcesso). Uma
     * mesa não pode ter duas comandas abertas ao mesmo tempo (CLAUDE.md
     * seção 4.1: comanda é sessão contínua da mesa).
     */
    public function abrir(AbrirComandaDTO $dto): Comanda
    {
        $dto->validate();

        return $this->transaction(function () use ($dto) {
            $this->throwIf(
                $this->mesaRepository->possuiComandaAberta($dto->getMesaId()),
                'Esta mesa já possui uma comanda aberta.',
            );

            return $this->comandaRepository->create($dto->toArray() + [
                'token' => Str::random(40),
                'status' => StatusComanda::ABERTA->value,
                'aberta_em' => $this->now(),
            ]);
        });
    }

    public function atribuirGarcom(int $comandaId, ?int $garcomId): void
    {
        $this->comandaRepository->update($comandaId, ['garcom_id' => $garcomId]);
    }

    /**
     * Encerramento manual — pelo garçom/balcão no painel, ou pelo
     * próprio cliente via celular (App\Livewire\Publico\ComandaAcesso).
     */
    public function fechar(int $comandaId): void
    {
        /** @var Comanda $comanda */
        $comanda = $this->comandaRepository->findOrFail($comandaId);

        $this->throwIf($comanda->status === StatusComanda::FECHADA, 'Esta comanda já está fechada.');

        $this->comandaRepository->update($comandaId, [
            'status' => StatusComanda::FECHADA->value,
            'fechada_em' => $this->now(),
        ]);
    }
}
