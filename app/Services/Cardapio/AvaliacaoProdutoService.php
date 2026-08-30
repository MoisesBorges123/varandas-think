<?php

namespace App\Services\Cardapio;

use App\DTO\Cardapio\AvaliarProdutoDTO;
use App\Enums\Pedido\StatusItemPedido;
use App\Models\AvaliacaoProduto;
use App\Repositories\Contracts\AvaliacaoProdutoRepositoryInterface;
use App\Repositories\Contracts\ItemPedidoRepositoryInterface;
use App\Services\Base\ServiceBase;
use Illuminate\Database\Eloquent\Collection;

/**
 * Avaliação de 1 a 5 estrelas por item de pedido (CLAUDE.md não previa
 * isso — feature nova do catálogo visual). Cliente só vê a média
 * agregada; o histórico individual é só pro admin (ver
 * mediaEQuantidade() vs listarPorProduto()).
 */
class AvaliacaoProdutoService extends ServiceBase
{
    public function __construct(
        private readonly AvaliacaoProdutoRepositoryInterface $avaliacaoProdutoRepository,
        private readonly ItemPedidoRepositoryInterface $itemPedidoRepository,
    ) {
    }

    public function avaliar(AvaliarProdutoDTO $dto): AvaliacaoProduto
    {
        $dto->validate();

        $item = $this->itemPedidoRepository->encontrarComRelacoes($dto->getItemPedidoId());

        $this->throwUnless(
            $item->status === StatusItemPedido::ENTREGUE,
            'Você só pode avaliar pratos já entregues.',
        );

        $this->throwIf(
            $item->avaliacao()->exists(),
            'Você já avaliou este pedido.',
        );

        return $this->avaliacaoProdutoRepository->create([
            'item_pedido_id' => $item->id,
            'produto_id' => $item->produto_id,
            'nota' => $dto->getNota(),
        ]);
    }

    /**
     * @return array{media: float, quantidade: int}
     */
    public function mediaEQuantidade(int $produtoId): array
    {
        return $this->avaliacaoProdutoRepository->mediaEQuantidade($produtoId);
    }

    public function listarPorProduto(int $produtoId): Collection
    {
        return $this->avaliacaoProdutoRepository->listarPorProduto($produtoId);
    }

    /**
     * @param  array<int, int>  $produtoIds
     * @return array<int, array{media: float, quantidade: int}>
     */
    public function mediaEQuantidadePorProdutos(array $produtoIds): array
    {
        return $this->avaliacaoProdutoRepository->mediaEQuantidadePorProdutos($produtoIds);
    }
}
