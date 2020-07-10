<?php
use Illuminate\Database\Seeder;

class ImagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagem = new App\Models\Imagem;
        $imagem->original_name = 'example-1.png';
        $imagem->save();

        $imagem = new App\Models\Imagem;
        $imagem->original_name = 'example-2.png';
        $imagem->save();

        $imagem = new App\Models\Imagem;
        $imagem->original_name = 'example-3.png';
        $imagem->save();
    }
}