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
        $user->email = 'master@condominio.loc';
        $user->identidade = '99999999-1';
        $user->genero = 'Masculino';
        $user->entrada = '08:00';
        $user->saida = '20:00';
        $user->foto = '#';
        $user->telefone_1 = '11999999999';
        $user->telefone_2 = '';
        $user->cargo = 'Master';
        $user->condominio_id = 1;
        $user->password = bcrypt('123456');
        $user->role_id = 1;
        $user->remember_token = str_random(10);
        $user->save();

        $user = new App\User;
        $user->name = 'Funcionario B';
        $user->email = 'sindico@condominio.loc';
        $user->identidade = '99999999-2';
        $user->genero = 'Masculino';
        $user->entrada = '08:00';
        $user->saida = '20:00';
        $user->foto = '#';
        $user->telefone_1 = '11999999998';
        $user->telefone_2 = '';
        $user->cargo = 'Síndico';
        $user->condominio_id = 1;
        $user->password = bcrypt('123456');
        $user->role_id = 2;
        $user->remember_token = str_random(10);
        $user->save();

        $user = new App\User;
        $user->name = 'Funcionario C';
        $user->email = 'porteiro@condominio.loc';
        $user->identidade = '99999999-3';
        $user->genero = 'Masculino';
        $user->entrada = '08:00';
        $user->saida = '20:00';
        $user->foto = '#';
        $user->telefone_1 = '11999999997';
        $user->telefone_2 = '';
        $user->cargo = 'Porteiro';
        $user->condominio_id = 1;
        $user->password = bcrypt('123456');
        $user->role_id = 3;
        $user->remember_token = str_random(10);
        $user->save();


    }

}