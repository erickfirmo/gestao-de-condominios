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
        $user->name = 'Funcionario A';
        $user->email = 'master@condominio.dev';
        $user->foto_de_perfil = '#';
        $user->password = bcrypt('123456');
        $user->funcionario_id = 1;
        $user->role_id = 1;
        $user->remember_token = str_random(10);
        $user->save();

        $user = new App\User;
        $user->name = 'Funcionario B';
        $user->email = 'sindico@condominio.dev';
        $user->foto_de_perfil = '#';
        $user->password = bcrypt('123456');
        $user->funcionario_id = 2;
        $user->role_id = 2;
        $user->remember_token = str_random(10);
        $user->save();

        $user = new App\User;
        $user->name = 'Funcionario C';
        $user->email = 'porteiro@condominio.dev';
        $user->foto_de_perfil = '#';
        $user->password = bcrypt('123456');
        $user->funcionario_id = 3;
        $user->role_id = 3;
        $user->remember_token = str_random(10);
        $user->save();

    }

}