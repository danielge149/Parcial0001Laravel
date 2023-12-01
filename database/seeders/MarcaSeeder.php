<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'idMarca' => '1',
                'descripcion' => 'Nike'
            ],
            [
                'idMarca' => '2',
                'descripcion' => 'Reeebok'
            ],
            [
                'idMarca' => '3',
                'descripcion' => 'Adidas'
            ],
            [
                'idMarca' => '4',
                'descripcion' => 'Puma'
            ],
            
        ];
        DB::table('marca')->insert($datos);
    }
}
