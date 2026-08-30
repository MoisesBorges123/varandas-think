<?php

namespace Tests\Feature\Cardapio;

use App\Livewire\Cardapio\ProdutoForm;
use App\Models\Produto;
use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class ProdutoFormFotosTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Storage::fake('public');
    }

    public function test_fluxo_completo_de_upload_remover_e_tornar_capa(): void
    {
        $usuario = Usuario::factory()->create();
        $produto = Produto::factory()->create();

        $componente = Livewire::actingAs($usuario)
            ->test(ProdutoForm::class, ['produto' => $produto])
            ->set('novasFotos', [
                UploadedFile::fake()->image('a.jpg', 200, 200),
                UploadedFile::fake()->image('b.jpg', 200, 200),
            ])
            ->call('enviarFotos');

        $produto->refresh();
        $this->assertCount(2, $produto->fotos);

        $segundaFoto = $produto->fotos->last();
        $componente->call('tornarCapa', $segundaFoto->id);

        $produto->refresh();
        $this->assertSame($segundaFoto->id, $produto->fotos->first()->id);

        $componente->call('removerFoto', $produto->fotos->last()->id);

        $produto->refresh();
        $this->assertCount(1, $produto->fotos);
    }
}
