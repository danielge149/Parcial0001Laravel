<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'referencia' => '001',
                'nombre' => 'Tenis',
                'descripcion' => 'Tenis deportivos, patra cada dia',
                'color' => 'Blancos',
                'precioUnitario' => '200000',
                'observacion' => 'Lindos tenis para el dia a dia',
                'foto' => 'img/nike1.jpg',
                'marca' => '1',
            ],
            [
                'referencia' => '002',
                'nombre' => 'Botas',
                'descripcion' => 'Botas deportivas para aventuras al aire libre',
                'color' => 'Negro',
                'precioUnitario' => '180000',
                'observacion' => 'Ideales para senderismo y actividades deportivas',
                'foto' => 'img/reebok2.jpg',
                'marca' => '2',
            ],
            [
                'referencia' => '003',
                'nombre' => 'Camiseta',
                'descripcion' => 'Camiseta deportiva para entrenamiento',
                'color' => 'Azul',
                'precioUnitario' => '50000',
                'observacion' => 'Cómoda y transpirable',
                'foto' => 'img/adidas3.jpg',
                'marca' => '3',
            ],
            [
                'referencia' => '004',
                'nombre' => 'Gorra',
                'descripcion' => 'Gorra deportiva para protección solar',
                'color' => 'Rojo',
                'precioUnitario' => '30000',
                'observacion' => 'Diseño moderno y ajustable',
                'foto' => 'img/gorra4.jpg',
                'marca' => '4',
            ],
            [
                'referencia' => '005',
                'nombre' => 'Chaqueta',
                'descripcion' => 'Chaqueta deportiva para clima frío',
                'color' => 'Negro',
                'precioUnitario' => '120000',
                'observacion' => 'Apta para actividades al aire libre en invierno',
                'foto' => 'img/nike5.jpg',
                'marca' => '1',
            ]

        ];
        DB::table('articulo')->insert($datos);
    }
}
