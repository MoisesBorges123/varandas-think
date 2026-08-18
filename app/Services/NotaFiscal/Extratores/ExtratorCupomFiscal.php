<?php

namespace App\Services\NotaFiscal\Extratores;

use App\DTO\NotaFiscal\DadosNotaFiscalDTO;

interface ExtratorCupomFiscal
{
    public function extrair(string $html, string $chaveAcesso): DadosNotaFiscalDTO;
}
