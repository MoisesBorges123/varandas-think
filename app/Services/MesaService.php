<?php

namespace App\Services;

use App\DTO\Comanda\MesaDTO;
use App\Models\Mesa;
use App\Repositories\Contracts\MesaRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;

class MesaService extends ServiceBase
{
    public function __construct(
        private readonly MesaRepositoryInterface $mesaRepository,
    ) {
    }

    public function listar(?string $busca = null): Collection
    {
        return $this->mesaRepository->listar($busca);
    }

    public function listarSemComandaAberta(): Collection
    {
        return $this->mesaRepository->listarSemComandaAberta();
    }

    public function encontrarPorToken(string $token): ?Mesa
    {
        return $this->mesaRepository->encontrarPorToken($token);
    }

    /**
     * O token do link/QR code é gerado aqui, uma vez, na criação da mesa
     * — nunca o id sequencial (CLAUDE.md seção 4.4: link não pode deixar
     * ninguém navegar de mesa em mesa).
     */
    public function criar(MesaDTO $dto): Mesa
    {
        $dto->validate();

        return $this->mesaRepository->create($dto->toArray() + [
            'token' => Str::random(40),
        ]);
    }

    public function atualizar(int $id, MesaDTO $dto): Mesa
    {
        $dto->validate();

        $this->mesaRepository->update($id, $dto->toArray());

        return $this->mesaRepository->findOrFail($id);
    }

    public function excluir(int $id): bool
    {
        $this->throwIf(
            $this->mesaRepository->possuiComandaAberta($id),
            'Esta mesa possui uma comanda aberta e não pode ser excluída.',
        );

        return $this->mesaRepository->delete($id);
    }
}
