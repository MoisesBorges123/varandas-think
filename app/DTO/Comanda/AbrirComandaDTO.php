<?php

namespace App\DTO\Comanda;

use App\DTO\Base\DTOBase;
use App\Enums\Comanda\TipoComanda;

/**
 * Compartilhado entre a abertura pelo painel (garçom/balcão) e a
 * abertura pública (cliente via QR code). A obrigatoriedade de
 * identificação do cliente (nome/CPF/telefone) é regra do fluxo
 * público (Livewire #[Validate] em App\Livewire\Publico\MesaAcesso),
 * não deste DTO — no painel, o garçom pode abrir sem esses dados.
 */
class AbrirComandaDTO extends DTOBase
{
    private ?int $mesaId = null;

    private ?TipoComanda $tipo = null;

    private ?int $garcomId = null;

    private ?string $clienteNome = null;

    private ?string $clienteCpf = null;

    private ?string $clienteTelefone = null;

    private ?string $clienteEmail = null;

    public function setMesaId(?int $mesaId): self
    {
        $this->mesaId = $mesaId;

        return $this;
    }

    public function getMesaId(): ?int
    {
        return $this->mesaId;
    }

    public function setTipo(?TipoComanda $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getTipo(): ?TipoComanda
    {
        return $this->tipo;
    }

    public function setGarcomId(?int $garcomId): self
    {
        $this->garcomId = $garcomId;

        return $this;
    }

    public function getGarcomId(): ?int
    {
        return $this->garcomId;
    }

    public function setClienteNome(?string $clienteNome): self
    {
        $this->clienteNome = $clienteNome;

        return $this;
    }

    public function getClienteNome(): ?string
    {
        return $this->clienteNome;
    }

    public function setClienteCpf(?string $clienteCpf): self
    {
        $this->clienteCpf = $clienteCpf;

        return $this;
    }

    public function getClienteCpf(): ?string
    {
        return $this->clienteCpf;
    }

    public function setClienteTelefone(?string $clienteTelefone): self
    {
        $this->clienteTelefone = $clienteTelefone;

        return $this;
    }

    public function getClienteTelefone(): ?string
    {
        return $this->clienteTelefone;
    }

    public function setClienteEmail(?string $clienteEmail): self
    {
        $this->clienteEmail = $clienteEmail;

        return $this;
    }

    public function getClienteEmail(): ?string
    {
        return $this->clienteEmail;
    }

    public function toArray(): array
    {
        return [
            'mesa_id' => $this->mesaId,
            'tipo' => $this->tipo?->value,
            'garcom_id' => $this->garcomId,
            'cliente_nome' => $this->clienteNome,
            'cliente_cpf' => $this->clienteCpf,
            'cliente_telefone' => $this->clienteTelefone,
            'cliente_email' => $this->clienteEmail,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->mesaId, 'mesa_id');
        $this->assertPresente($this->tipo, 'tipo');

        return $this;
    }

    public static function fromLivewire($componente): static
    {
        return (new static())
            ->setMesaId((int) $componente->mesaId)
            ->setTipo(TipoComanda::from($componente->tipo))
            ->setGarcomId($componente->garcomId !== '' && $componente->garcomId !== null ? (int) $componente->garcomId : null)
            ->setClienteNome($componente->clienteNome ?: null)
            ->setClienteCpf(($componente->clienteCpf ?? null) ?: null)
            ->setClienteTelefone($componente->clienteTelefone ?: null)
            ->setClienteEmail(($componente->clienteEmail ?? null) ?: null);
    }
}
