<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = new Producto;
        $p1->nombre = 'Producto 1';
        $p1->descripcion = 'Descripcion del Producto 1';
        $p1->precio = 111.11;

        $p2 = new Producto;
        $p2->nombre = 'Producto 2';
        $p2->descripcion = 'Descripcion del Producto 2';
        $p2->precio = 222.22;

        $p1->save();
        $p2->save();
    }
}
