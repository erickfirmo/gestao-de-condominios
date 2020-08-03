<?php
use Illuminate\Database\Seeder;

class VisitantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $visitante = new App\Models\Pet;
        $visitante->original_name = 'example-1.png';
        $visitante->save();

        $visitante = new App\Models\Pet;
        $visitante->original_name = 'example-2.png';
        $visitante->save();

        $visitante = new App\Models\Pet;
        $visitante->original_name = 'example-3.png';
        $visitante->save();
    }
}