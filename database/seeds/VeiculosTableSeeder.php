<?php
use Illuminate\Database\Seeder;

class VeiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $veiculo = new App\Models\Veiculo;
        $veiculo->original_name = 'example-1.png';
        $veiculo->save();

        $veiculo = new App\Models\Veiculo;
        $veiculo->original_name = 'example-2.png';
        $veiculo->save();

        $veiculo = new App\Models\Veiculo;
        $veiculo->original_name = 'example-3.png';
        $veiculo->save();
    }
}