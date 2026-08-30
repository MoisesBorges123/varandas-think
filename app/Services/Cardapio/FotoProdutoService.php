<?php

namespace App\Services\Cardapio;

use App\Models\Produto;
use App\Repositories\Contracts\FotoProdutoRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Upload de fotos do produto (1:N) — redimensiona (sem upscale, sem
 * crop) e converte pra .webp via GD antes de gravar no disco 'public'.
 * A uniformidade visual do grid do catálogo fica por conta do CSS
 * (object-fit: cover), não de recorte no servidor.
 */
class FotoProdutoService extends ServiceBase
{
    private const MAX_FOTOS_POR_PRODUTO = 8;

    private const LARGURA_MAXIMA = 1000;

    private const ALTURA_MAXIMA = 1000;

    private const QUALIDADE_WEBP = 82;

    public function __construct(
        private readonly FotoProdutoRepositoryInterface $fotoProdutoRepository,
    ) {
    }

    /**
     * @param  array<int, UploadedFile>  $arquivos
     */
    public function adicionarFotos(Produto $produto, array $arquivos): void
    {
        $existentes = $this->fotoProdutoRepository->listarPorProduto($produto->id);

        $this->throwIf(
            $existentes->count() + count($arquivos) > self::MAX_FOTOS_POR_PRODUTO,
            sprintf('Um produto pode ter no máximo %d fotos.', self::MAX_FOTOS_POR_PRODUTO),
        );

        $proximaOrdem = $existentes->count();

        foreach ($arquivos as $arquivo) {
            $caminho = $this->redimensionarEConverterParaWebp($produto->id, $arquivo);

            $this->fotoProdutoRepository->create([
                'produto_id' => $produto->id,
                'caminho' => $caminho,
                'ordem' => $proximaOrdem,
            ]);

            $proximaOrdem++;
        }
    }

    public function remover(int $fotoId): void
    {
        $foto = $this->fotoProdutoRepository->find($fotoId);
        $this->throwUnless((bool) $foto, 'Foto não encontrada.');

        Storage::disk('public')->delete($foto->caminho);

        $produtoId = $foto->produto_id;
        $this->fotoProdutoRepository->delete($fotoId);

        $this->reordenar($produtoId);
    }

    /**
     * Move a foto selecionada pro início da galeria (ordem 0 = capa),
     * empurrando as demais — reordenação completa em memória, simples o
     * bastante pro volume de fotos por produto (máximo 8).
     */
    public function tornarCapa(int $fotoId): void
    {
        $foto = $this->fotoProdutoRepository->find($fotoId);
        $this->throwUnless((bool) $foto, 'Foto não encontrada.');

        $fotos = $this->fotoProdutoRepository->listarPorProduto($foto->produto_id);
        $reordenadas = $fotos->reject(fn ($f) => $f->id === $foto->id)->values()->prepend($foto);

        foreach ($reordenadas as $indice => $f) {
            $this->fotoProdutoRepository->update($f->id, ['ordem' => $indice]);
        }
    }

    private function reordenar(int $produtoId): void
    {
        $fotos = $this->fotoProdutoRepository->listarPorProduto($produtoId);

        foreach ($fotos->values() as $indice => $foto) {
            if ($foto->ordem !== $indice) {
                $this->fotoProdutoRepository->update($foto->id, ['ordem' => $indice]);
            }
        }
    }

    private function redimensionarEConverterParaWebp(int $produtoId, UploadedFile $arquivo): string
    {
        $imagemOriginal = imagecreatefromstring(file_get_contents($arquivo->getRealPath()));
        $this->throwUnless((bool) $imagemOriginal, 'Não foi possível processar a imagem enviada.');

        $larguraOriginal = imagesx($imagemOriginal);
        $alturaOriginal = imagesy($imagemOriginal);

        $proporcao = min(self::LARGURA_MAXIMA / $larguraOriginal, self::ALTURA_MAXIMA / $alturaOriginal, 1.0);
        $novaLargura = max(1, (int) round($larguraOriginal * $proporcao));
        $novaAltura = max(1, (int) round($alturaOriginal * $proporcao));

        $imagemRedimensionada = imagecreatetruecolor($novaLargura, $novaAltura);
        imagealphablending($imagemRedimensionada, false);
        imagesavealpha($imagemRedimensionada, true);
        $transparente = imagecolorallocatealpha($imagemRedimensionada, 0, 0, 0, 127);
        imagefilledrectangle($imagemRedimensionada, 0, 0, $novaLargura, $novaAltura, $transparente);

        imagecopyresampled(
            $imagemRedimensionada, $imagemOriginal,
            0, 0, 0, 0,
            $novaLargura, $novaAltura, $larguraOriginal, $alturaOriginal,
        );

        $caminhoRelativo = sprintf('produtos/%d/%s.webp', $produtoId, Str::uuid()->toString());
        Storage::disk('public')->makeDirectory("produtos/{$produtoId}");

        imagewebp($imagemRedimensionada, Storage::disk('public')->path($caminhoRelativo), self::QUALIDADE_WEBP);

        imagedestroy($imagemOriginal);
        imagedestroy($imagemRedimensionada);

        return $caminhoRelativo;
    }
}
