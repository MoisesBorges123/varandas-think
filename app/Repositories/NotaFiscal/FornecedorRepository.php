<?php

namespace App\Repositories\NotaFiscal;

use App\Models\Fornecedor;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\FornecedorRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class FornecedorRepository extends Repository implements FornecedorRepositoryInterface
{
    public function __construct(Fornecedor $model)
    {
        parent::__construct($model);
    }

    public function encontrarPorCnpj(string $cnpj): ?Fornecedor
    {
        return $this->query()->where('cnpj', $cnpj)->first();
    }

    public function encontrarOuCriarPorCnpj(array $dados): Fornecedor
    {
        return $this->query()->firstOrCreate(
            ['cnpj' => $dados['cnpj']],
            $dados,
        );
    }

    public function listar(?string $busca = null): Collection
    {
        return $this->query()
            ->when($busca, fn ($query) => $query->where('razao_social', 'like', "%{$busca}%"))
            ->orderBy('razao_social')
            ->get();
    }

    public function countComprasVinculadas(int $fornecedorId): int
    {
        return $this->model->findOrFail($fornecedorId)->compras()->count();
    }
}
