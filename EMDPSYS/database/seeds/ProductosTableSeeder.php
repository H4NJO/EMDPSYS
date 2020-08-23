<?php

use App\Producto;
use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Producto::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Producto::create([
                'cCodigo' => $faker->number,
                'cNombreProducto' => $faker->sentence,
                'nPrecioUnitario' => $faker->number,
                'nCostoUnitario' => $faker->number,
                'nGanancia' => $faker->number,
                'dUltimaVenta' => $faker->date,
                'nGanancia' => $faker->number,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
