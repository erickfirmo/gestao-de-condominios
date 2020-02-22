<?php
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new App\Admin;
        $admin->name = 'Érick Firmo';
        $admin->email = 'admin@erickfirmo.dev';
        $admin->foto_de_perfil = '#';
        $admin->password = bcrypt('psw');
        $admin->remember_token = str_random(10);
        $admin->save();
    }
}