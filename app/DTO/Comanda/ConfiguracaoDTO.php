<?php

namespace App\DTO\Comanda;

use App\DTO\Base\DTOBase;

class ConfiguracaoDTO extends DTOBase
{
    private ?float $latitude = null;

    private ?float $longitude = null;

    private ?int $raioMetros = null;

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

    public function toArray(): array
    {
        return [
            'bar_latitude' => $this->latitude,
            'bar_longitude' => $this->longitude,
            'raio_metros' => $this->raioMetros,
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
            ->setRaioMetros((int) $componente->raioMetros);
    }
}
