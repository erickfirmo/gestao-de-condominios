<?php
use Illuminate\Database\Seeder;

class ImoveisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imovel = new App\Models\Imovel;
        $imovel->numero = '1';
        $imovel->bloco = 'A';
        $imovel->andar = 'T';
        $imovel->descricao = 'Lorem ipsum dolor sit amet.';
        $imovel->observacoes = 'Lorem ipsum dolor sit amet.';
        $imovel->condominio_id = '1';
        $imovel->save();

        $imovel = new App\Models\Imovel;
        $imovel->numero = '2';
        $imovel->bloco = 'A';
        $imovel->andar = '1';
        $imovel->descricao = 'Lorem ipsum dolor sit amet.';
        $imovel->observacoes = 'Lorem ipsum dolor sit amet.';
        $imovel->condominio_id = '1';
        $imovel->save();

        $imovel = new App\Models\Imovel;
        $imovel->numero = '1';
        $imovel->bloco = 'B';
        $imovel->andar = 'T';
        $imovel->descricao = 'Lorem ipsum dolor sit amet.';
        $imovel->observacoes = 'Lorem ipsum dolor sit amet.';
        $imovel->condominio_id = '1';
        $imovel->save();

        $imovel = new App\Models\Imovel;
        $imovel->numero = '2';
        $imovel->bloco = 'B';
        $imovel->andar = '1';
        $imovel->descricao = 'Lorem ipsum dolor sit amet.';
        $imovel->observacoes = 'Lorem ipsum dolor sit amet.';
        $imovel->condominio_id = '1';
        $imovel->save();
    }
}