<?php
use Illuminate\Database\Seeder;

class UfsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ufs = [

        ];

        foreach ($ufs as $sigla => $estado) {
            $uf = new App\Models\Uf;
            $uf->sigla = '';
            $uf->estado = '';
            $uf->save();
        }   
    }
}