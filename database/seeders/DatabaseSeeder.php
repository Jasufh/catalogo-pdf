<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com', 
            'password' => Hash::make('password'),
        ]);

         // Generar 10 Productoos (bolsas y mochilas)
         Producto::create([
            'tipo' => 'Bolsa',
            'color' => 'Negra',
            'modelo' => 'B-278',
            'imagen' => 'bolsa_negra.jpg',
            'stock' => 50,
        ]);

        Producto::create([
            'tipo' => 'Mochila',
            'color' => 'Azul',
            'modelo' => 'M-378',
            'imagen' => 'mochila_azul.jpg',
            'stock' => 30,
        ]);

        Producto::create([
            'tipo' => 'Bolsa',
            'color' => 'Roja',
            'modelo' => 'B-458',
            'imagen' => 'bolsa_roja.jpg',
            'stock' => 40,
        ]);

        Producto::create([
            'tipo' => 'Mochila',
            'color' => 'Negra',
            'modelo' => 'M-783',
            'imagen' => 'mochila_negra.jpg',
            'stock' => 25,
        ]);

        Producto::create([
            'tipo' => 'Bolsa',
            'color' => 'Beige',
            'modelo' => 'B-3211',
            'imagen' => 'bolsa_beige.jpg',
            'stock' => 20,
        ]);

        Producto::create([
            'tipo' => 'Mochila',
            'color' => 'Verde',
            'modelo' => 'M-213',
            'imagen' => 'mochila_verde.jpg',
            'stock' => 15,
        ]);

        Producto::create([
            'tipo' => 'Bolsa',
            'color' => 'Blanca',
            'modelo' => 'B-311',
            'imagen' => 'bolsa_blanca.jpg',
            'stock' => 35,
        ]);

        Producto::create([
            'tipo' => 'Mochila',
            'color' => 'Gris',
            'modelo' => 'M-698',
            'imagen' => 'mochila_gris.jpg',
            'stock' => 10,
        ]);

        Producto::create([
            'tipo' => 'Bolsa',
            'color' => 'Morada',
            'modelo' => 'B-211',
            'imagen' => 'bolsa_morada.jpg',
            'stock' => 30,
        ]);

        Producto::create([
            'tipo' => 'Mochila',
            'color' => 'Naranja',
            'modelo' => 'M-998',
            'imagen' => 'mochila_naranja.jpg',
            'stock' => 5,
        ]);

    }
}
