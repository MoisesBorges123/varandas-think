<?php

namespace App\Repositories\Cardapio;

use App\Models\PrecoProduto;
use App\Models\Produto;
use App\Repositories\Base\Repository;
use App\Repositories\Contracts\ProdutoRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ProdutoRepository extends Repository implements ProdutoRepositoryInterface
{
    public function __construct(Produto $model)
    {
        parent::__construct($model);
    }

    public function listar(?string $busca = null, ?int $categoriaId = null, ?bool $ativo = null): Collection
    {
        return $this->query()
            ->with(['categoria', 'precoAtual'])
            ->when($busca, fn ($query) => $query->where('nome', 'like', "%{$busca}%"))
            ->when($categoriaId, fn ($query) => $query->where('categoria_id', $categoriaId))
            ->when($ativo !== null, fn ($query) => $query->where('ativo', $ativo))
            ->orderBy('nome')
            ->get();
    }

    public function countPorCategoria(int $categoriaId): int
    {
        return $this->query()->where('categoria_id', $categoriaId)->count();
    }

    /**
     * Insere um novo registro em precos_produtos. NUNCA atualiza um
     * registro existente (CLAUDE.md, seção 2 — preço é histórico).
     */
    public function registrarPreco(int $produtoId, float $preco, ?int $createdBy): PrecoProduto
    {
        return PrecoProduto::create([
            'produto_id' => $produtoId,
            'preco' => $preco,
            'vigente_desde' => now(),
            'created_by' => $createdBy,
        ]);
    }
}
