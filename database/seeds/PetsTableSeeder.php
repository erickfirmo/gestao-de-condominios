<?php
use Illuminate\Database\Seeder;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pet = new App\Models\Pet;
        $pet->original_name = 'example-1.png';
        $pet->save();

        $pet = new App\Models\Pet;
        $pet->original_name = 'example-2.png';
        $pet->save();

        $pet = new App\Models\Pet;
        $pet->original_name = 'example-3.png';
        $pet->save();
    }
}