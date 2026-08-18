<?php

namespace App\Repositories\Contracts;

use App\Models\Fornecedor;
use Illuminate\Database\Eloquent\Collection;

interface FornecedorRepositoryInterface extends RepositoryInterface
{
    public function encontrarPorCnpj(string $cnpj): ?Fornecedor;

    public function encontrarOuCriarPorCnpj(array $dados): Fornecedor;

    public function listar(?string $busca = null): Collection;

    public function countComprasVinculadas(int $fornecedorId): int;
}
