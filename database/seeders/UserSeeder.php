<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $superUser = new User();
        $superUser->name = 'SuperUsuario';
        $superUser->email = 'superusuario@correo.com';
        $superUser->password = bcrypt('password');
        $superUser->save();
        
    }
}
