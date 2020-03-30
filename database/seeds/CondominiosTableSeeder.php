<?php

use Illuminate\Database\Seeder;

class CondominiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $condominio = new App\Models\Condominio;
        $condominio->nome = 'Condomínio A';
        $condominio->descricao = 'Lorem ipsum dollor sit amet.';
        $condominio->cep = '08000000';
        $condominio->logradouro = 'Av. Paulista';
        $condominio->numero = '999';
        $condominio->bairro = 'Bairro A';
        $condominio->cidade = 'São Paulo';
        $condominio->uf_id = 25;
        $condominio->complemento = '';
        $condominio->observacoes = '';
        $condominio->empresa_id = 1;
        $condominio->save();
    }
}
