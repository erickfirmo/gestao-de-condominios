<?php
use Illuminate\Database\Seeder;

class FuncionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $funcionario = new App\Models\Funcionario;
        $funcionario->nome_completo = 'Funcionario A';
        $funcionario->identidade = '99999999-1';
        $funcionario->genero = 'masc';
        $funcionario->entrada = '8:00';
        $funcionario->saida = '20:00';
        $funcionario->foto = '#';
        $funcionario->telefone_1 = '11999999997';
        $funcionario->telefone_2 = '';
        $funcionario->cargo = 'Master';
        $funcionario->condominio_id = 1;
        $funcionario->save();

        $funcionario = new App\Models\Funcionario;
        $funcionario->nome_completo = 'Funcionario B';
        $funcionario->identidade = '99999999-2';
        $funcionario->genero = 'masc';
        $funcionario->entrada = '8:00';
        $funcionario->saida = '20:00';
        $funcionario->foto = '#';
        $funcionario->telefone_1 = '11999999998';
        $funcionario->telefone_2 = '';
        $funcionario->cargo = 'Síndico';
        $funcionario->condominio_id = 1;
        $funcionario->save();

        $funcionario = new App\Models\Funcionario;
        $funcionario->nome_completo = 'Funcionario C';
        $funcionario->identidade = '99999999-3';
        $funcionario->genero = 'masc';
        $funcionario->entrada = '8:00';
        $funcionario->saida = '20:00';
        $funcionario->foto = '#';
        $funcionario->telefone_1 = '11999999999';
        $funcionario->telefone_2 = '';
        $funcionario->cargo = 'Porteiro';
        $funcionario->condominio_id = 1;
        $funcionario->save();

    }

}