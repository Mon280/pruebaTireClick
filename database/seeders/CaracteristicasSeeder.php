<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Caracteristica;
use Faker\Factory as Faker;

class CaracteristicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = Producto::all();
        
        $faker = Faker::create();

        foreach ($productos as $producto) {
            $cantidad_caracteristicas = rand(3, 5);

            for ($i = 0; $i < $cantidad_caracteristicas; $i++) {
                $caracteristica = new Caracteristica();
                $caracteristica->id_producto = $producto->id;

                $nombre_caracteristica = $faker->randomElement(['Peso', 'Color', 'Tamaño', 'Material', 'Dimensiones']);
                $caracteristica->nombre_caracteristica = $nombre_caracteristica;

                switch ($nombre_caracteristica) {
                    case 'Peso':
                        $descripcion = $faker->randomFloat(1, 1, 100) . 'kg';
                        break;
                    case 'Color':
                        $descripcion = $faker->safeColorName;
                        break;
                    case 'Tamaño':
                        $descripcion = $faker->randomElement(['Pequeño', 'Mediano', 'Grande']);
                        break;
                    case 'Material':
                        $descripcion = $faker->randomElement(['Acero', 'Plástico', 'Madera']);
                        break;
                    case 'Dimensiones':
                        $descripcion = $faker->randomFloat(2, 1, 10) . 'x' . $faker->randomFloat(2, 1, 10) . 'x' . $faker->randomFloat(2, 1, 10) . 'cm';
                        break;
                    default:
                        $descripcion = $faker->sentence();
                        break;
                }

                $caracteristica->descripcion = $descripcion;

                $caracteristica->save();
            }
        }
    }
}
