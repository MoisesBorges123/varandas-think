<?php

namespace App\DTO\Notificacao;

use App\DTO\Base\DTOBase;
use App\Enums\Notificacao\TipoNotificacao;

class NotificacaoDTO extends DTOBase
{
    private ?int $perfilId = null;

    private ?int $usuarioId = null;

    private ?TipoNotificacao $tipo = null;

    private ?string $titulo = null;

    private ?string $mensagem = null;

    private ?string $referenciaTipo = null;

    private ?int $referenciaId = null;

    public function setPerfilId(?int $perfilId): self
    {
        $this->perfilId = $perfilId;

        return $this;
    }

    public function setUsuarioId(?int $usuarioId): self
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    public function setTipo(TipoNotificacao|string|null $tipo): self
    {
        $this->tipo = is_string($tipo) ? TipoNotificacao::from($tipo) : $tipo;

        return $this;
    }

    public function getTipo(): ?TipoNotificacao
    {
        return $this->tipo;
    }

    public function setTitulo(?string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function setMensagem(?string $mensagem): self
    {
        $this->mensagem = $mensagem;

        return $this;
    }

    public function setReferenciaTipo(?string $referenciaTipo): self
    {
        $this->referenciaTipo = $referenciaTipo;

        return $this;
    }

    public function getReferenciaTipo(): ?string
    {
        return $this->referenciaTipo;
    }

    public function setReferenciaId(?int $referenciaId): self
    {
        $this->referenciaId = $referenciaId;

        return $this;
    }

    public function getReferenciaId(): ?int
    {
        return $this->referenciaId;
    }

    public function toArray(): array
    {
        return [
            'perfil_id' => $this->perfilId,
            'usuario_id' => $this->usuarioId,
            'tipo' => $this->tipo?->value,
            'titulo' => $this->titulo,
            'mensagem' => $this->mensagem,
            'referencia_tipo' => $this->referenciaTipo,
            'referencia_id' => $this->referenciaId,
        ];
    }

    public function validate(): self
    {
        $this->assertPresente($this->tipo?->value, 'tipo');
        $this->assertPresente($this->titulo, 'titulo');
        $this->assertPresente($this->mensagem, 'mensagem');

        if ($this->perfilId === null && $this->usuarioId === null) {
            throw new \InvalidArgumentException('Informe um perfil_id ou um usuario_id de destino.');
        }

        return $this;
    }
}
