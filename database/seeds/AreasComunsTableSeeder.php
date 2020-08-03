<?php
use Illuminate\Database\Seeder;

class AreasComunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area_comum = new App\Models\AreaComum;
        $area_comum->original_name = 'example-1.png';
        $area_comum->save();

        $area_comum = new App\Models\AreaComum;
        $area_comum->original_name = 'example-2.png';
        $area_comum->save();

        $area_comum = new App\Models\AreaComum;
        $area_comum->original_name = 'example-3.png';
        $area_comum->save();
    }
}