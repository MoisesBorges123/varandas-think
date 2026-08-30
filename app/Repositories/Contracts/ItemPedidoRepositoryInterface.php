<?php

namespace App\Repositories\Contracts;

use App\Models\ItemPedido;
use Illuminate\Database\Eloquent\Collection;

interface ItemPedidoRepositoryInterface extends RepositoryInterface
{
    public function encontrarComRelacoes(int $id): ItemPedido;

    public function listarPorComanda(int $comandaId): Collection;

    public function listarFilaAprovacao(?int $garcomId, bool $verTudo): Collection;

    public function listarParaCozinha(): Collection;

    /**
     * @param  array{status?: ?string}  $filtros
     */
    public function listarParaBalcao(array $filtros): Collection;

    /**
     * Escrita atômica condicional — o coração da trava otimista de
     * aprovação/rejeição. Retorna o número de linhas afetadas: 0
     * significa que outro colega já resolveu o item primeiro.
     */
    public function atualizarSeStatusFor(int $id, string $statusEsperado, array $dados): int;
}
