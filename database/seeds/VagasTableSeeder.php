<?php
use Illuminate\Database\Seeder;

class VagasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vaga = new App\Models\Vaga;
        $vaga->original_name = 'example-1.png';
        $vaga->save();

        $vaga = new App\Models\Vaga;
        $vaga->original_name = 'example-2.png';
        $vaga->save();

        $vaga = new App\Models\Vaga;
        $vaga->original_name = 'example-3.png';
        $vaga->save();
    }
}