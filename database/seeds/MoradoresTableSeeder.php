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
        $morador->nome = 'Érick Firmo';
        $morador->genero = 'Masculino';
        $morador->observacoes = 'Lorem ipsum dollor sit amet';
        $morador->proprietario = 1;
        $morador->imovel_id = 1;
        $morador->save();
    }
}