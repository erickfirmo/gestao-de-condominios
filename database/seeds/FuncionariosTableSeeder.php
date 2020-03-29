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
        $funcionario->identidade = '99999999-0';
        $funcionario->genero = 'masc';
        $funcionario->entrada = '8:00';
        $funcionario->saida = '20:00';
        $funcionario->foto = '#';
        $funcionario->telefone_1 = '11999999999';
        $funcionario->telefone_2 = '';
        $funcionario->cargo = 'Master';
        $funcionario->empresa_id = 1;
        $funcionario->save();

        $funcionario = new App\Models\Funcionario;
        $funcionario->nome_completo = 'Funcionario B';
        $funcionario->identidade = '99999999-0';
        $funcionario->genero = 'masc';
        $funcionario->entrada = '8:00';
        $funcionario->saida = '20:00';
        $funcionario->foto = '#';
        $funcionario->telefone_1 = '11999999999';
        $funcionario->telefone_2 = '';
        $funcionario->cargo = 'Síndico';
        $funcionario->empresa_id = 1;
        $funcionario->save();

        $funcionario = new App\Models\Funcionario;
        $funcionario->nome_completo = 'Funcionario C';
        $funcionario->identidade = '99999999-0';
        $funcionario->genero = 'masc';
        $funcionario->entrada = '8:00';
        $funcionario->saida = '20:00';
        $funcionario->foto = '#';
        $funcionario->telefone_1 = '11999999999';
        $funcionario->telefone_2 = '';
        $funcionario->cargo = 'Porteiro';
        $funcionario->empresa_id = 1;
        $funcionario->save();

    }

}