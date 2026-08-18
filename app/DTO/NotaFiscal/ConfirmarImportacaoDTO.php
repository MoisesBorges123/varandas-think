<?php

namespace App\DTO\NotaFiscal;

use App\DTO\Base\DTOBase;

class ConfirmarImportacaoDTO extends DTOBase
{
    private ?DadosNotaFiscalDTO $dadosNota = null;

    /** @var array<int, int> índices (chaves do array de itens) selecionados na revisão */
    private array $itensSelecionadosIndices = [];

    private ?int $createdBy = null;

    public function setDadosNota(DadosNotaFiscalDTO $dadosNota): self
    {
        $this->dadosNota = $dadosNota;

        return $this;
    }

    public function getDadosNota(): ?DadosNotaFiscalDTO
    {
        return $this->dadosNota;
    }

    public function setItensSelecionadosIndices(array $indices): self
    {
        $this->itensSelecionadosIndices = array_map('intval', $indices);

        return $this;
    }

    public function getItensSelecionadosIndices(): array
    {
        return $this->itensSelecionadosIndices;
    }

    public function setCreatedBy(?int $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getCreatedBy(): ?int
    {
        return $this->createdBy;
    }

    public function toArray(): array
    {
        return [
            'dados_nota' => $this->dadosNota?->toArray(),
            'itens_selecionados_indices' => $this->itensSelecionadosIndices,
            'created_by' => $this->createdBy,
        ];
    }

    public function validate(): self
    {
        if (! $this->dadosNota) {
            throw new \InvalidArgumentException('Dados da nota não informados.');
        }

        $this->dadosNota->validate();

        if (empty($this->itensSelecionadosIndices)) {
            throw new \InvalidArgumentException('Selecione ao menos um item para importar.');
        }

        return $this;
    }

    /**
     * O componente Livewire guarda `dadosNota` como array simples (DTOs
     * não são serializáveis pelo Livewire como propriedade pública) —
     * reconstrói o DTO de verdade aqui antes de repassar ao Service.
     */
    public static function fromLivewire($componente): static
    {
        return (new static())
            ->setDadosNota(DadosNotaFiscalDTO::fromArray($componente->dadosNota))
            ->setItensSelecionadosIndices($componente->itensSelecionados)
            ->setCreatedBy(auth()->id());
    }
}
