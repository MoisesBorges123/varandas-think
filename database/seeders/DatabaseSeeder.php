<?php

namespace Database\Seeders;

use App\Enums\Usuario\PerfilNome;
use App\Models\Perfil;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $perfis = collect(PerfilNome::cases())->mapWithKeys(
            fn (PerfilNome $perfilNome) => [
                $perfilNome->value => Perfil::firstOrCreate(['nome' => $perfilNome->value]),
            ]
        );

        Usuario::firstOrCreate(
            ['email' => 'admin@varandas.local'],
            [
                'perfil_id' => $perfis[PerfilNome::ADMINISTRADOR->value]->id,
                'nome' => 'Administrador',
                'password' => 'password',
                'ativo' => true,
            ]
        );
    }
}
