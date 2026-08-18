<?php

namespace App\DTO\NotaFiscal;

use App\DTO\Base\DTOBase;

class FornecedorDTO extends DTOBase
{
    private ?string $cnpj = null;

    private ?string $razaoSocial = null;

    private ?string $nomeFantasia = null;

    private ?string $uf = null;

    public function setCnpj(?string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    public function getCnpj(): ?string
    {
        return $this->cnpj;
    }

    public function setRazaoSocial(?string $razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    public function getRazaoSocial(): ?string
    {
        return $this->razaoSocial;
    }

    public function setNomeFantasia(?string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    public function getNomeFantasia(): ?string
    {
        return $this->nomeFantasia;
    }

    public function setUf(?string $uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    public function getUf(): ?string
    {
        return $this->uf;
    }

    public function toArray(): array
    {
        return [
            'cnpj' => $this->cnpj ?: null,
            'razao_social' => $this->razaoSocial,
            'nome_fantasia' => $this->nomeFantasia ?: null,
            'uf' => $this->uf ?: null,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->razaoSocial, 'razao_social');

        return $this;
    }

    public static function fromLivewire($componente): static
    {
        return (new static())
            ->setCnpj($componente->cnpj)
            ->setRazaoSocial($componente->razaoSocial)
            ->setNomeFantasia($componente->nomeFantasia)
            ->setUf($componente->uf);
    }
}
