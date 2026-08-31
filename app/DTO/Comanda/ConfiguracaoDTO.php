<?php

namespace App\DTO\Comanda;

use App\DTO\Base\DTOBase;

class ConfiguracaoDTO extends DTOBase
{
    private ?float $latitude = null;

    private ?float $longitude = null;

    private ?int $raioMetros = null;

    private bool $validacaoEstoqueAutomaticaAtiva = false;

    private bool $permitirGarcomCancelarItemColega = false;

    private bool $permitirGarcomExcluirProprioItem = true;

    private bool $permitirGarcomExcluirItemColega = false;

    private ?string $mpDeviceIdBalcao = null;

    private ?string $mpDeviceIdPortatil = null;

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setRaioMetros(?int $raioMetros): self
    {
        $this->raioMetros = $raioMetros;

        return $this;
    }

    public function getRaioMetros(): ?int
    {
        return $this->raioMetros;
    }

    public function setValidacaoEstoqueAutomaticaAtiva(bool $validacaoEstoqueAutomaticaAtiva): self
    {
        $this->validacaoEstoqueAutomaticaAtiva = $validacaoEstoqueAutomaticaAtiva;

        return $this;
    }

    public function getValidacaoEstoqueAutomaticaAtiva(): bool
    {
        return $this->validacaoEstoqueAutomaticaAtiva;
    }

    public function setPermitirGarcomCancelarItemColega(bool $permitirGarcomCancelarItemColega): self
    {
        $this->permitirGarcomCancelarItemColega = $permitirGarcomCancelarItemColega;

        return $this;
    }

    public function getPermitirGarcomCancelarItemColega(): bool
    {
        return $this->permitirGarcomCancelarItemColega;
    }

    public function setPermitirGarcomExcluirProprioItem(bool $permitirGarcomExcluirProprioItem): self
    {
        $this->permitirGarcomExcluirProprioItem = $permitirGarcomExcluirProprioItem;

        return $this;
    }

    public function getPermitirGarcomExcluirProprioItem(): bool
    {
        return $this->permitirGarcomExcluirProprioItem;
    }

    public function setPermitirGarcomExcluirItemColega(bool $permitirGarcomExcluirItemColega): self
    {
        $this->permitirGarcomExcluirItemColega = $permitirGarcomExcluirItemColega;

        return $this;
    }

    public function getPermitirGarcomExcluirItemColega(): bool
    {
        return $this->permitirGarcomExcluirItemColega;
    }

    public function setMpDeviceIdBalcao(?string $mpDeviceIdBalcao): self
    {
        $this->mpDeviceIdBalcao = $mpDeviceIdBalcao;

        return $this;
    }

    public function getMpDeviceIdBalcao(): ?string
    {
        return $this->mpDeviceIdBalcao;
    }

    public function setMpDeviceIdPortatil(?string $mpDeviceIdPortatil): self
    {
        $this->mpDeviceIdPortatil = $mpDeviceIdPortatil;

        return $this;
    }

    public function getMpDeviceIdPortatil(): ?string
    {
        return $this->mpDeviceIdPortatil;
    }

    public function toArray(): array
    {
        return [
            'bar_latitude' => $this->latitude,
            'bar_longitude' => $this->longitude,
            'raio_metros' => $this->raioMetros,
            'validacao_estoque_automatica_ativa' => $this->validacaoEstoqueAutomaticaAtiva,
            'permitir_garcom_cancelar_item_colega' => $this->permitirGarcomCancelarItemColega,
            'permitir_garcom_excluir_proprio_item' => $this->permitirGarcomExcluirProprioItem,
            'permitir_garcom_excluir_item_colega' => $this->permitirGarcomExcluirItemColega,
            'mp_device_id_balcao' => $this->mpDeviceIdBalcao,
            'mp_device_id_portatil' => $this->mpDeviceIdPortatil,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->latitude, 'latitude');
        $this->assertPresente($this->longitude, 'longitude');
        $this->assertPositivo($this->raioMetros, 'raio_metros');

        return $this;
    }

    public static function fromLivewire($componente): static
    {
        return (new static())
            ->setLatitude((float) str_replace(',', '.', (string) $componente->latitude))
            ->setLongitude((float) str_replace(',', '.', (string) $componente->longitude))
            ->setRaioMetros((int) $componente->raioMetros)
            ->setValidacaoEstoqueAutomaticaAtiva((bool) $componente->validacaoEstoqueAutomaticaAtiva)
            ->setPermitirGarcomCancelarItemColega((bool) $componente->permitirGarcomCancelarItemColega)
            ->setPermitirGarcomExcluirProprioItem((bool) $componente->permitirGarcomExcluirProprioItem)
            ->setPermitirGarcomExcluirItemColega((bool) $componente->permitirGarcomExcluirItemColega)
            ->setMpDeviceIdBalcao($componente->mpDeviceIdBalcao ?: null)
            ->setMpDeviceIdPortatil($componente->mpDeviceIdPortatil ?: null);
    }
}
