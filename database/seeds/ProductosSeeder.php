<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = [
            [
                'nombre' => 'mouse',
                'descripcion' => 'raton para uso en un pad',
                'precio' => 20.5,
                'created_at' => Carbon::now(),
            ],
            [
                'nombre' => 'screen 24',
                'descripcion' => 'pantalla gamer para uso en domicilio',
                'precio' => 335,
                'created_at' => Carbon::now(),
            ],
            [
                'nombre' => 'teclado',
                'descripcion' => 'teclado gamer Antryx RGB',
                'precio' => 90.9,
                'created_at' => Carbon::now(),
            ],
        ];

        DB::table('productos')->insert($productos);
    }
}
