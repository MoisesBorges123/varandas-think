<?php

namespace App\Services\Base;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

/**
 * Classe base para os Services do projeto Varandas.
 *
 * Centraliza utilitários comuns (transação, usuário autenticado, data
 * atual, checagens de exceção) para que os Services concretos foquem
 * apenas na orquestração do caso de uso, sem repetir boilerplate.
 */
abstract class ServiceBase
{
    /**
     * Conexão a usar. `null` = conexão padrão do Laravel
     * (`config('database.default')`: mysql em dev/produção, sqlite em
     * testes). Só defina um nome fixo aqui se o Service realmente precisar
     * de uma conexão nomeada específica — um valor fixo tipo 'mysql' quebra
     * os testes (que rodam em sqlite via phpunit.xml).
     */
    protected ?string $connection = null;

    /**
     * Executa uma transação usando a conexão configurada. Use sempre que
     * a operação tocar mais de uma tabela relacionada (ex.: adicionar
     * item ao pedido = congelar preço + validar estoque + criar item +
     * baixar ingredientes + recalcular total).
     *
     * Exemplo:
     *
     *   return $this->transaction(function () use ($dto) {
     *       $item = $this->pedidoRepository->criarItem($dto);
     *       $this->estoqueService->darBaixaPorItem($item);
     *       return $item;
     *   });
     */
    protected function transaction(Closure $callback)
    {
        return $this->db()->transaction($callback);
    }

    /**
     * Retorna a conexão atual configurada para este Service.
     */
    protected function db()
    {
        return DB::connection($this->connection);
    }

    /**
     * ID do usuário autenticado (garçom, balconista, admin, etc.). Útil
     * para preencher campos de autoria (created_by, lancado_por,
     * aprovado_por) sem espalhar `Auth::id()` por todo Service.
     */
    protected function userId(): ?int
    {
        return Auth::check() ? Auth::id() : null;
    }

    /**
     * Data/hora atual — centralizado para facilitar mock em testes.
     */
    protected function now(): Carbon
    {
        return now();
    }

    /**
     * Lança exceção caso a condição seja verdadeira. Útil para guard
     * clauses de regra de negócio no início de um método de Service.
     *
     * Exemplo:
     *
     *   $this->throwIf(
     *       $item->status !== StatusItemPedido::PENDENTE_APROVACAO,
     *       'Este pedido já foi resolvido por outro colega.'
     *   );
     */
    protected function throwIf(
        bool $condition,
        string $message,
        string $exception = \Exception::class
    ): void {
        throw_if($condition, $exception, $message);
    }

    /**
     * Lança exceção caso a condição seja falsa.
     */
    protected function throwUnless(
        bool $condition,
        string $message,
        string $exception = \Exception::class
    ): void {
        throw_unless($condition, $exception, $message);
    }

    /**
     * Verifica se um valor é nulo/vazio.
     */
    protected function blank($value): bool
    {
        return blank($value);
    }

    /**
     * Verifica se um valor possui conteúdo.
     */
    protected function filled($value): bool
    {
        return filled($value);
    }
}
