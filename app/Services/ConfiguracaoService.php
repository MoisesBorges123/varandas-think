<?php

namespace App\Services;

use App\DTO\Comanda\ConfiguracaoDTO;
use App\Models\Configuracao;
use App\Repositories\Contracts\ConfiguracaoRepositoryInterface;
use App\Services\Base\ServiceBase;

class ConfiguracaoService extends ServiceBase
{
    public function __construct(
        private readonly ConfiguracaoRepositoryInterface $configuracaoRepository,
    ) {
    }

    public function obter(): ?Configuracao
    {
        return $this->configuracaoRepository->obter();
    }

    public function atualizar(ConfiguracaoDTO $dto): Configuracao
    {
        $dto->validate();

        return $this->configuracaoRepository->atualizar($dto->toArray());
    }
}
