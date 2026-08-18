<?php

namespace App\Services;

use App\DTO\NotaFiscal\FornecedorDTO;
use App\Models\Fornecedor;
use App\Repositories\Contracts\FornecedorRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Database\Eloquent\Collection;

class FornecedorService extends ServiceBase
{
    public function __construct(
        private readonly FornecedorRepositoryInterface $fornecedorRepository,
    ) {
    }

    public function encontrarOuCriarPorCnpj(string $cnpj, string $razaoSocial, ?string $uf): Fornecedor
    {
        return $this->fornecedorRepository->encontrarOuCriarPorCnpj([
            'cnpj' => $cnpj,
            'razao_social' => $razaoSocial,
            'uf' => $uf,
        ]);
    }

    public function listar(?string $busca = null): Collection
    {
        return $this->fornecedorRepository->listar($busca);
    }

    public function criar(FornecedorDTO $dto): Fornecedor
    {
        $dto->validate();

        return $this->fornecedorRepository->create($dto->toArray());
    }

    public function atualizar(int $id, FornecedorDTO $dto): Fornecedor
    {
        $dto->validate();

        $this->fornecedorRepository->update($id, $dto->toArray());

        return $this->fornecedorRepository->findOrFail($id);
    }

    public function excluir(int $id): bool
    {
        $this->throwIf(
            $this->fornecedorRepository->countComprasVinculadas($id) > 0,
            'Este fornecedor possui compras vinculadas e não pode ser excluído.',
        );

        return $this->fornecedorRepository->delete($id);
    }
}
