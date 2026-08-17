<?php

namespace App\DTO\Base;

/**
 * Classe base para todos os DTOs do projeto Varandas.
 *
 * Um DTO transporta dados entre camadas (Livewire/Request → Service) sem
 * acoplar a Application Layer à estrutura da interface. Ele NÃO persiste
 * dados, NÃO acessa banco, NÃO chama API externa, e não deve conter regra
 * de negócio complexa — apenas transporte e validação estrutural básica
 * (campo obrigatório, tipo, formato).
 *
 * Todo DTO concreto deve:
 *   - usar setters fluentes (retornando self) sobre propriedades privadas;
 *   - implementar toArray(): array — formato pronto para persistência
 *     (Model::create()/update()) ou para passar a um Service;
 *   - implementar validate(): self — validações estruturais do próprio
 *     DTO, lançando \InvalidArgumentException em caso de erro. Regras de
 *     negócio (ex.: "existe estoque suficiente?") NÃO pertencem aqui —
 *     pertencem ao Service/Domain.
 */
abstract class DTOBase
{
    /**
     * Converte o DTO para array associativo, pronto para persistência ou
     * para ser passado a um Service. Cada DTO concreto define suas
     * próprias chaves, seguindo a convenção de nomes de coluna já usada
     * no diagrama ER do projeto (snake_case, em português).
     */
    abstract public function toArray(): array;

    /**
     * Validações estruturais do DTO (campos obrigatórios, tipos,
     * formatos). Deve lançar \InvalidArgumentException em caso de falha e
     * retornar $this em caso de sucesso, permitindo uso encadeado:
     *
     *   $dto = MeuDTO::fromLivewire($componente)->validate();
     */
    abstract public function validate(): self;

    /**
     * Constrói o DTO a partir de um array associativo (ex.: vindo de um
     * Form Request já validado, ou de dados brutos). Cada DTO concreto
     * deve sobrescrever este método estático mapeando as chaves do array
     * para os setters fluentes correspondentes.
     *
     * Exemplo de implementação num DTO concreto:
     *
     *   public static function fromArray(array $dados): static
     *   {
     *       return (new static())
     *           ->setComandaId($dados['comanda_id'] ?? null)
     *           ->setProdutoId($dados['produto_id'] ?? null);
     *   }
     */
    public static function fromArray(array $dados): static
    {
        throw new \LogicException(
            static::class . ' precisa implementar fromArray() mapeando os campos esperados.'
        );
    }

    /**
     * Constrói o DTO a partir de um componente Livewire (normalmente
     * $this dentro do próprio componente). Cada DTO concreto que for
     * alimentado por uma tela Livewire deve sobrescrever este método,
     * lendo as propriedades públicas do componente e chamando os setters
     * fluentes correspondentes.
     *
     * Isso evita passar o componente Livewire inteiro para dentro de um
     * Service (o Service não deve conhecer Livewire).
     *
     * Exemplo de implementação num DTO concreto:
     *
     *   public static function fromLivewire($componente): static
     *   {
     *       return (new static())
     *           ->setComandaId($componente->comandaId)
     *           ->setProdutoId($componente->produtoSelecionadoId)
     *           ->setLancadoPor(auth()->id());
     *   }
     */
    public static function fromLivewire($componente): static
    {
        throw new \LogicException(
            static::class . ' precisa implementar fromLivewire() mapeando as propriedades do componente.'
        );
    }

    /**
     * Helper de conveniência para checar campos obrigatórios dentro de
     * validate(), evitando repetir a mesma checagem em todo DTO.
     *
     * Uso típico dentro de um validate() concreto:
     *
     *   $this->assertPresente($this->comandaId, 'comanda_id');
     *
     * @throws \InvalidArgumentException
     */
    protected function assertPresente(mixed $valor, string $nomeCampo): void
    {
        if ($valor === null || $valor === '') {
            throw new \InvalidArgumentException(
                sprintf('O campo "%s" é obrigatório.', $nomeCampo)
            );
        }
    }

    /**
     * Helper de conveniência para checar que um valor numérico é positivo
     * (uso comum em quantidade, valor monetário, etc.).
     *
     * @throws \InvalidArgumentException
     */
    protected function assertPositivo(int|float|null $valor, string $nomeCampo): void
    {
        if ($valor === null || $valor <= 0) {
            throw new \InvalidArgumentException(
                sprintf('O campo "%s" deve ser um valor positivo.', $nomeCampo)
            );
        }
    }
}
