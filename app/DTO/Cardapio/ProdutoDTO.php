<?php

namespace App\DTO\Cardapio;

use App\DTO\Base\DTOBase;
use App\Enums\Cardapio\TipoProduto;

class ProdutoDTO extends DTOBase
{
    private ?int $categoriaId = null;

    private ?string $nome = null;

    private ?TipoProduto $tipo = null;

    private bool $ativo = true;

    private bool $disponivel = true;

    private bool $validaEstoqueAutomatico = true;

    private ?int $createdBy = null;

    public function setCategoriaId(?int $categoriaId): self
    {
        $this->categoriaId = $categoriaId;

        return $this;
    }

    public function getCategoriaId(): ?int
    {
        return $this->categoriaId;
    }

    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setTipo(TipoProduto|string|null $tipo): self
    {
        $this->tipo = is_string($tipo) ? TipoProduto::from($tipo) : $tipo;

        return $this;
    }

    public function getTipo(): ?TipoProduto
    {
        return $this->tipo;
    }

    public function setAtivo(bool $ativo): self
    {
        $this->ativo = $ativo;

        return $this;
    }

    public function setDisponivel(bool $disponivel): self
    {
        $this->disponivel = $disponivel;

        return $this;
    }

    public function setValidaEstoqueAutomatico(bool $validaEstoqueAutomatico): self
    {
        $this->validaEstoqueAutomatico = $validaEstoqueAutomatico;

        return $this;
    }

    public function setCreatedBy(?int $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function toArray(): array
    {
        return array_filter([
            'categoria_id' => $this->categoriaId,
            'nome' => $this->nome,
            'tipo' => $this->tipo?->value,
            'ativo' => $this->ativo,
            'disponivel' => $this->disponivel,
            'valida_estoque_automatico' => $this->validaEstoqueAutomatico,
            'created_by' => $this->createdBy,
        ], fn ($valor) => $valor !== null);
    }

    public function validate(): self
    {
        $this->assertPresente($this->categoriaId, 'categoria_id');
        $this->assertPresente($this->nome, 'nome');
        $this->assertPresente($this->tipo?->value, 'tipo');

        return $this;
    }

    public static function fromLivewire($componente): static
    {
        return (new static())
            ->setCategoriaId($componente->categoriaId ? (int) $componente->categoriaId : null)
            ->setNome($componente->nome)
            ->setTipo($componente->tipo)
            ->setAtivo((bool) $componente->ativo)
            ->setDisponivel((bool) $componente->disponivel)
            ->setValidaEstoqueAutomatico((bool) $componente->validaEstoqueAutomatico)
            ->setCreatedBy(auth()->id());
    }
}
