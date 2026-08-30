<?php

namespace App\Livewire\Publico;

use App\DTO\Cardapio\AvaliarProdutoDTO;
use App\DTO\Pedido\AdicionarItemPedidoDTO;
use App\Enums\Cardapio\TipoProduto;
use App\Exceptions\EstoqueProvavelmenteIndisponivelException;
use App\Models\Comanda;
use App\Models\Produto;
use App\Services\Cardapio\AvaliacaoProdutoService;
use App\Services\ComandaService;
use App\Services\GeolocalizacaoService;
use App\Services\Pedido\ItemPedidoService;
use Livewire\Attributes\Layout;
use Livewire\Component;

/**
 * Sessão contínua da comanda do cliente (CLAUDE.md seção 4.4) — token
 * inválido, comanda fechada e fora do raio caem todos no mesmo estado
 * "bloqueado", com a mesma mensagem genérica, pra nunca confirmar que
 * uma comanda existiu por trás de um token específico.
 */
#[Layout('components.layouts.cliente')]
class ComandaAcesso extends Component
{
    /** Relações padrão da comanda carregadas em todo load/refresh desta tela. */
    private const RELACOES_COMANDA = ['mesa', 'itensPedido.produto', 'itensPedido.avaliacao'];

    public string $token = '';

    public bool $verificado = false;

    public bool $liberado = false;

    public bool $encerradaComSucesso = false;

    public ?Comanda $comanda = null;

    public string $produtoSelecionadoId = '';

    public string $quantidade = '1';

    public string $pedidoPorNome = '';

    public bool $estoqueDuvidoso = false;

    /** Produto em destaque no overlay de detalhe/promoção (CLAUDE.md — feature de catálogo visual). */
    public ?int $produtoDetalheId = null;

    public function mount(string $token): void
    {
        $this->token = $token;
    }

    public function verificarLocalizacao(float $lat, float $lng, ComandaService $service, GeolocalizacaoService $geo): void
    {
        $comanda = $service->encontrarPorToken($this->token);

        $this->liberado = $comanda !== null
            && $comanda->estaAberta()
            && $geo->estaDentroDoRaio($lat, $lng);

        $this->comanda = $this->liberado ? $comanda->load(self::RELACOES_COMANDA) : null;
        $this->verificado = true;
    }

    public function encerrar(float $lat, float $lng, ComandaService $service, GeolocalizacaoService $geo): void
    {
        $this->verificarLocalizacao($lat, $lng, $service, $geo);

        if (! $this->liberado) {
            return;
        }

        $service->fechar($this->comanda->id);

        $this->liberado = false;
        $this->comanda = null;
        $this->encerradaComSucesso = true;
    }

    /**
     * Reverifica geolocalização + status da comanda a cada nova
     * solicitação de pedido (CLAUDE.md seção 4.4) antes de qualquer
     * outra coisa.
     */
    public function pedirItem(float $lat, float $lng, ComandaService $comandaService, GeolocalizacaoService $geo, ItemPedidoService $itemPedidoService): void
    {
        $this->verificarLocalizacao($lat, $lng, $comandaService, $geo);

        if (! $this->liberado) {
            return;
        }

        $this->enviarPedido($itemPedidoService, confirmarComAviso: false);
    }

    /**
     * Cliente confirmou mesmo depois do aviso de estoque duvidoso.
     */
    public function confirmarPedidoComAviso(ItemPedidoService $itemPedidoService): void
    {
        $this->estoqueDuvidoso = false;

        $this->enviarPedido($itemPedidoService, confirmarComAviso: true);
    }

    /**
     * Refresh passivo pro wire:poll — atualiza o status dos itens já
     * pedidos sem pedir geolocalização de novo (não é uma "nova
     * solicitação" no sentido do CLAUDE.md seção 4.4, só visualização
     * ao vivo do que já foi enviado; pedir permissão de GPS a cada
     * poll seria péssima UX).
     */
    public function atualizarItens(): void
    {
        if (! $this->liberado || ! $this->comanda) {
            return;
        }

        $this->comanda = $this->comanda->fresh(self::RELACOES_COMANDA);
    }

    /**
     * Abre o overlay de detalhe/galeria de um produto — usado tanto pelo
     * banner de promoção quanto pelo clique num card do catálogo. Fica
     * dentro do mesmo componente (não uma rota nova) pra não precisar
     * reverificar geolocalização/token só pra ver fotos.
     */
    public function abrirDetalhe(int $produtoId): void
    {
        $this->produtoDetalheId = $produtoId;
        $this->produtoSelecionadoId = (string) $produtoId;
    }

    public function fecharDetalhe(): void
    {
        $this->produtoDetalheId = null;
    }

    /**
     * Cliente avalia (1 a 5 estrelas) um prato que já recebeu. O cliente
     * nunca vê a lista de avaliações de outros — só a média agregada,
     * calculada no render() a partir do produto.
     */
    public function avaliar(int $itemPedidoId, int $nota, AvaliacaoProdutoService $service): void
    {
        try {
            $dto = (new AvaliarProdutoDTO())
                ->setItemPedidoId($itemPedidoId)
                ->setNota($nota);

            $service->avaliar($dto);

            $this->comanda = $this->comanda->fresh(self::RELACOES_COMANDA);

            $this->dispatch('toastr', message: 'Obrigado pela avaliação!', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível avaliar');
        }
    }

    private function enviarPedido(ItemPedidoService $itemPedidoService, bool $confirmarComAviso): void
    {
        try {
            $dto = (new AdicionarItemPedidoDTO())
                ->setComandaId($this->comanda->id)
                ->setProdutoId((int) $this->produtoSelecionadoId)
                ->setQuantidade((int) $this->quantidade)
                ->setPedidoPorNome($this->pedidoPorNome ?: null);

            $itemPedidoService->pedirPeloCliente($dto, $confirmarComAviso);

            $this->produtoSelecionadoId = '';
            $this->quantidade = '1';
            $this->produtoDetalheId = null;

            $this->comanda = $this->comanda->fresh(self::RELACOES_COMANDA);

            $this->dispatch('toastr', message: 'Pedido enviado! Aguardando confirmação do garçom.', type: 'success', title: 'Pronto');
        } catch (EstoqueProvavelmenteIndisponivelException) {
            $this->estoqueDuvidoso = true;
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível enviar o pedido');
        }
    }

    public function render(AvaliacaoProdutoService $avaliacaoService)
    {
        // CLAUDE.md seção 3.2: venda avulsa de balcão é um fluxo separado,
        // nunca deveria aparecer no catálogo do cliente via QR code.
        $produtos = Produto::query()
            ->where('ativo', true)
            ->where('disponivel', true)
            ->where('tipo', TipoProduto::PREPARADO->value)
            ->with(['fotos', 'precoAtual'])
            ->orderBy('nome')
            ->get();

        $mediaPorProduto = $avaliacaoService->mediaEQuantidadePorProdutos($produtos->pluck('id')->all());

        $produtoDetalhe = $this->produtoDetalheId
            ? $produtos->firstWhere('id', $this->produtoDetalheId)
            : null;

        return view('livewire.publico.comanda-acesso', [
            'produtos' => $produtos,
            'produtosEmPromocao' => $produtos->where('em_promocao', true)->values(),
            'mediaPorProduto' => $mediaPorProduto,
            'produtoDetalhe' => $produtoDetalhe,
            'mediaAvaliacoesDetalhe' => $produtoDetalhe ? ($mediaPorProduto[$produtoDetalhe->id] ?? ['media' => 0.0, 'quantidade' => 0]) : null,
        ]);
    }
}
