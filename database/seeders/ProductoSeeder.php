<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker
;class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            $nombre = $faker->sentence(3);
            $descripcion = $faker->paragraph(3);
            $slug = Str::slug($nombre, '-'); 
            $precio = $faker->randomFloat(2, 10, 50);
            $stock = $faker->numberBetween(0, 100);
            $marca = $faker->company;

            DB::table('productos')->insert([
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'slug' => $slug,
                'precio' => $precio,
                'stock' => $stock,
                'marca' => $marca,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
