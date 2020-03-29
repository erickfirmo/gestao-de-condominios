<?php
use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresa = new App\Models\Empresa;
        $empresa->razao_social = 'Empresa A';
        $empresa->nome_fantasia = 'Nova Empresa A';
        $empresa->cnpj = '99.999.999/0001-99';
        $empresa->email = 'contato@empresa.br';
        $empresa->telefone_1 = '11999999999';
        $empresa->telefone_2 = '';
        $empresa->responsavel_para_contato = 'João';
        $empresa->save();
    }
}