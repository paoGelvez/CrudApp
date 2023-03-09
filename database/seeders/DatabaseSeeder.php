<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categorias;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        categorias::factory(3)->create();

        // categorias::factory()->create([
        //     'Nombrecategoria' => 'cliente'
        // ]);

        // categorias::factory()->create([
        //     'Nombrecategoria' => 'proveedor'
        // ]);

        // categorias::factory()->create([
        //     'Nombrecategoria' => 'funcionario interno'
        // ]);
    }
}
