<?php
use Illuminate\Database\Seeder;

class ImagensDasEntidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagem_da_entidade = new App\Models\ImagemDaEntidade;
        $imagem_da_entidade->imagem_id = '1';
        $imagem_da_entidade->parent_id = '1';
        $imagem_da_entidade->parent_class = 'Imovel';
        $imagem_da_entidade->save();
        
        $imagem_da_entidade = new App\Models\ImagemDaEntidade;
        $imagem_da_entidade->imagem_id = '2';
        $imagem_da_entidade->parent_id = '1';
        $imagem_da_entidade->parent_class = 'Imovel';
        $imagem_da_entidade->save();

        $imagem_da_entidade = new App\Models\ImagemDaEntidade;
        $imagem_da_entidade->imagem_id = '3';
        $imagem_da_entidade->parent_id = '2';
        $imagem_da_entidade->parent_class = 'Imovel';
        $imagem_da_entidade->save();

        $imagem_da_entidade = new App\Models\ImagemDaEntidade;
        $imagem_da_entidade->imagem_id = '3';
        $imagem_da_entidade->parent_id = '3';
        $imagem_da_entidade->parent_class = 'Imovel';
        $imagem_da_entidade->save();
    }
}