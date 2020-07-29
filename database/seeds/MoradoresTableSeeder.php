<?php
use Illuminate\Database\Seeder;

class MoradoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $morador = new App\Models\Morador;
        $morador->nome = 'example-1.png';
        $morador->genero = 'example-1.png';
        $morador->observacoes = 'example-1.png';
        $morador->proprietario = 'example-1.png';
        $morador->imovel_id = 1;
        $morador->save();
    }
}