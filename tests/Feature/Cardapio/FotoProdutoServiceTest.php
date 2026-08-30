<?php

namespace Tests\Feature\Cardapio;

use App\Models\Produto;
use App\Services\Cardapio\FotoProdutoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FotoProdutoServiceTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Storage::fake('public');
    }

    public function test_upload_gera_arquivo_webp_real_no_disco(): void
    {
        $produto = Produto::factory()->create();
        $arquivo = UploadedFile::fake()->image('foto.jpg', 600, 400);

        app(FotoProdutoService::class)->adicionarFotos($produto, [$arquivo]);

        $foto = $produto->fresh()->fotos->first();

        $this->assertNotNull($foto);
        $this->assertStringEndsWith('.webp', $foto->caminho);
        Storage::disk('public')->assertExists($foto->caminho);

        $caminhoAbsoluto = Storage::disk('public')->path($foto->caminho);
        $info = getimagesize($caminhoAbsoluto);

        $this->assertSame('image/webp', $info['mime']);
    }

    public function test_nao_faz_upscale_de_imagem_menor_que_a_caixa_maxima(): void
    {
        $produto = Produto::factory()->create();
        $arquivo = UploadedFile::fake()->image('pequena.jpg', 50, 40);

        app(FotoProdutoService::class)->adicionarFotos($produto, [$arquivo]);

        $foto = $produto->fresh()->fotos->first();
        $info = getimagesize(Storage::disk('public')->path($foto->caminho));

        $this->assertSame(50, $info[0]);
        $this->assertSame(40, $info[1]);
    }

    public function test_redimensiona_imagem_maior_que_a_caixa_maxima(): void
    {
        $produto = Produto::factory()->create();
        $arquivo = UploadedFile::fake()->image('grande.jpg', 2000, 1000);

        app(FotoProdutoService::class)->adicionarFotos($produto, [$arquivo]);

        $foto = $produto->fresh()->fotos->first();
        $info = getimagesize(Storage::disk('public')->path($foto->caminho));

        $this->assertSame(1000, $info[0]);
        $this->assertSame(500, $info[1]);
    }

    public function test_limite_de_oito_fotos_por_produto(): void
    {
        $produto = Produto::factory()->create();
        $arquivos = array_map(fn ($i) => UploadedFile::fake()->image("foto{$i}.jpg", 100, 100), range(1, 8));

        app(FotoProdutoService::class)->adicionarFotos($produto, $arquivos);

        $this->expectExceptionMessage('Um produto pode ter no máximo 8 fotos.');

        app(FotoProdutoService::class)->adicionarFotos($produto, [UploadedFile::fake()->image('extra.jpg', 100, 100)]);
    }

    public function test_remover_apaga_arquivo_e_reordena_capa(): void
    {
        $produto = Produto::factory()->create();
        $arquivos = array_map(fn ($i) => UploadedFile::fake()->image("foto{$i}.jpg", 100, 100), range(1, 3));

        $service = app(FotoProdutoService::class);
        $service->adicionarFotos($produto, $arquivos);

        $fotos = $produto->fresh()->fotos;
        $primeiraFoto = $fotos->first();
        $caminhoRemovido = $primeiraFoto->caminho;

        $service->remover($primeiraFoto->id);

        Storage::disk('public')->assertMissing($caminhoRemovido);

        $restantes = $produto->fresh()->fotos;
        $this->assertCount(2, $restantes);
        $this->assertSame([0, 1], $restantes->pluck('ordem')->all());
    }

    public function test_tornar_capa_reordena_com_tres_fotos(): void
    {
        $produto = Produto::factory()->create();
        $arquivos = array_map(fn ($i) => UploadedFile::fake()->image("foto{$i}.jpg", 100, 100), range(1, 3));

        $service = app(FotoProdutoService::class);
        $service->adicionarFotos($produto, $arquivos);

        $fotos = $produto->fresh()->fotos;
        $terceiraFoto = $fotos->last();

        $service->tornarCapa($terceiraFoto->id);

        $fotosReordenadas = $produto->fresh()->fotos;

        $this->assertSame($terceiraFoto->id, $fotosReordenadas->first()->id);
        $this->assertSame([0, 1, 2], $fotosReordenadas->pluck('ordem')->all());
    }
}
