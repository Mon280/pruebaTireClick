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
            $caracteristicas_existente = $producto->caracteristicas->pluck('nombre_caracteristica')->toArray();

            $posibles_caracteristicas = ['Diámetro', 'Peso', 'Sabor', 'Cobertura', 'Relleno'];

            shuffle($posibles_caracteristicas);

            foreach ($posibles_caracteristicas as $nombre_caracteristica) {
                if (!in_array($nombre_caracteristica, $caracteristicas_existente)) {
                    $caracteristica = new Caracteristica();
                    $caracteristica->id_producto = $producto->id;
                    $caracteristica->nombre_caracteristica = $nombre_caracteristica;

                    switch ($nombre_caracteristica) {
                        case 'Diámetro':
                            $descripcion_caracteristica = $faker->randomFloat(2, 5, 15) . ' cm';
                            break;
                        case 'Peso':
                            $descripcion_caracteristica = $faker->randomFloat(1, 20, 100) . ' gr';
                            break;
                        case 'Sabor':
                            $descripcion_caracteristica = $faker->randomElement(['Chocolate', 'Fresa', 'Vainilla', 'Caramelo', 'Limón']);
                            break;
                        case 'Cobertura':
                            $descripcion_caracteristica = $faker->randomElement(['Chocolate', 'Frosting de Vainilla', 'Glaseado de Fresa', 'Caramelo']);
                            break;
                        case 'Relleno':
                            $descripcion_caracteristica = $faker->randomElement(['Crema de Chocolate', 'Crema de Vainilla', 'Mermelada de Fresa', 'Cajeta']);
                            break;
                        default:
                            $descripcion_caracteristica = $faker->sentence();
                            break;
                    }

                    $caracteristica->descripcion_caracteristica = $descripcion_caracteristica;

                    $caracteristica->save();

                    $caracteristicas_existente[] = $nombre_caracteristica;
                }
            }
        }
    }
}
