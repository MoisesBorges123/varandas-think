<?php

namespace App\DTO\Estoque;

use App\DTO\Base\DTOBase;

class IngredienteDTO extends DTOBase
{
    private ?int $grupoEquivalenciaId = null;

    private ?string $nome = null;

    private ?string $unidadeMedida = null;

    private ?string $codigoFiscal = null;

    public function setGrupoEquivalenciaId(?int $grupoEquivalenciaId): self
    {
        $this->grupoEquivalenciaId = $grupoEquivalenciaId;

        return $this;
    }

    public function getGrupoEquivalenciaId(): ?int
    {
        return $this->grupoEquivalenciaId;
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

    public function setUnidadeMedida(?string $unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }

    public function getUnidadeMedida(): ?string
    {
        return $this->unidadeMedida;
    }

    public function setCodigoFiscal(?string $codigoFiscal): self
    {
        $this->codigoFiscal = $codigoFiscal ?: null;

        return $this;
    }

    public function getCodigoFiscal(): ?string
    {
        return $this->codigoFiscal;
    }

    public function toArray(): array
    {
        return [
            'grupo_equivalencia_id' => $this->grupoEquivalenciaId,
            'nome' => $this->nome,
            'unidade_medida' => $this->unidadeMedida,
            'codigo_fiscal' => $this->codigoFiscal,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->nome, 'nome');
        $this->assertPresente($this->unidadeMedida, 'unidade_medida');

        return $this;
    }

    public static function fromLivewire($componente): static
    {
        return (new static())
            ->setGrupoEquivalenciaId($componente->grupoEquivalenciaId ? (int) $componente->grupoEquivalenciaId : null)
            ->setNome($componente->nome)
            ->setUnidadeMedida($componente->unidadeMedida)
            ->setCodigoFiscal($componente->codigoFiscal);
    }
}
