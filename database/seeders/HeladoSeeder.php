<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Helado;

class HeladoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $helados = [
            [
                'nombre' => 'Chocolate',
                'descripcion' => 'Helado cremoso de chocolate.',
                'precio' => 2.50,
                'imagen' => 'chocolate.jpg',
            ],
            [
                'nombre' => 'Vainilla',
                'descripcion' => 'Clásico helado de vainilla.',
                'precio' => 2.00,
                'imagen' => 'vainilla.jpg',
            ],
            [
                'nombre' => 'Fresa',
                'descripcion' => 'Helado natural de fresa.',
                'precio' => 2.30,
                'imagen' => 'fresa.jpg',
            ],
            [
                'nombre' => 'Menta con Chocolate',
                'descripcion' => 'Refrescante menta con trozos de chocolate.',
                'precio' => 2.80,
                'imagen' => 'menta_chocolate.jpg',
            ],
            [
                'nombre' => 'Dulce de Leche',
                'descripcion' => 'Helado de dulce de leche tradicional.',
                'precio' => 2.60,
                'imagen' => 'dulce_de_leche.jpg',
            ],
            [
                'nombre' => 'Coco',
                'descripcion' => 'Helado tropical de coco.',
                'precio' => 2.40,
                'imagen' => 'coco.jpg',
            ],
            [
                'nombre' => 'Limón',
                'descripcion' => 'Helado refrescante de limón.',
                'precio' => 2.20,
                'imagen' => 'limon.jpg',
            ],
            [
                'nombre' => 'Avellana',
                'descripcion' => 'Helado de avellanas tostadas.',
                'precio' => 2.90,
                'imagen' => 'avellana.jpg',
            ],
            [
                'nombre' => 'Mango',
                'descripcion' => 'Helado tropical de mango.',
                'precio' => 2.50,
                'imagen' => 'mango.jpg',
            ],
        ];

        foreach ($helados as $helado) {
            Helado::create($helado);
        }
    }
}
