<?php

namespace App\Services\NotaFiscal;

use Illuminate\Support\Facades\Http;

/**
 * Busca o HTML bruto da nota — dois caminhos bem diferentes:
 *
 * - Cupom fiscal (NFC-e): a URL de consulta já vem completa dentro do
 *   próprio QR code (aponta pro portal da Sefaz do estado emissor).
 * - NF-e de fornecedor (DANFE, código de barras ou chave digitada): a
 *   consulta é sempre no portal NACIONAL, confirmado contra uma DANFE
 *   real (rodapé: "Consulta de autenticidade no portal nacional da NF-e
 *   www.nfe.fazenda.gov.br/portal") — não é por estado como o cupom.
 *
 * Risco conhecido (ver config/nfe.php): a consulta pública do portal
 * nacional costuma ter captcha, o que pode bloquear esse scraping na
 * prática — só se confirma testando contra uma nota real.
 */
class BuscadorNotaFiscalService
{
    public function buscarPorUrl(string $url): string
    {
        return $this->buscar($url);
    }

    public function buscarPorChaveAcesso(string $chaveAcesso): string
    {
        $chaveAcesso = preg_replace('/\D/', '', $chaveAcesso) ?? '';

        if (strlen($chaveAcesso) !== 44) {
            throw new \InvalidArgumentException('A chave de acesso deve ter 44 dígitos.');
        }

        $urlPortal = config('nfe.portal_nacional_nfe');

        return $this->buscar($urlPortal.'?chNFe='.$chaveAcesso);
    }

    public function resolverUfPorChave(string $chaveAcesso): string
    {
        $codigoIbge = substr($chaveAcesso, 0, 2);
        $uf = config("nfe.ibge_para_uf.{$codigoIbge}");

        if (! $uf) {
            throw new \InvalidArgumentException("Não foi possível identificar o estado a partir da chave de acesso (código {$codigoIbge}).");
        }

        return $uf;
    }

    private function buscar(string $url): string
    {
        $response = Http::timeout(15)->get($url);

        if ($response->failed()) {
            throw new \RuntimeException('Não foi possível consultar o portal da Sefaz. Tente novamente em instantes.');
        }

        return $response->body();
    }
}
