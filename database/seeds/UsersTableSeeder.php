<?php
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User;
        $user->name = 'Érick Firmo';
        $user->email = 'erick@condominio.dev';
        $user->foto_de_perfil = '#';
        $user->password = bcrypt('psw');
        $user->role_id = 1;
        $user->remember_token = str_random(10);
        $user->save();

        $user = new App\User;
        $user->name = 'Síndico';
        $user->email = 'sindico@condominio.dev';
        $user->foto_de_perfil = '#';
        $user->password = bcrypt('psw');
        $user->role_id = 2;
        $user->remember_token = str_random(10);
        $user->save();

        $user = new App\User;
        $user->name = 'Porteiro';
        $user->email = 'porteiro@condominio.dev';
        $user->foto_de_perfil = '#';
        $user->password = bcrypt('psw');
        $user->role_id = 3;
        $user->remember_token = str_random(10);
        $user->save();

    }

}