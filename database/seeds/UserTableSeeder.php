<?php

use Illuminate\Database\Seeder;
use EloquentORM\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // llamamos al factory previamente creado en la carpeta de ModelFactory y le enviamos el modelo
        // y la cantidad de registros que va a registrar
        factory(User::class)->create([
            'name' => 'GabrielAttila',
            'email' => 'gabrieljmorenot@gmail.com'
        ]);
        factory(User::class, 100)->create();
    }
}
