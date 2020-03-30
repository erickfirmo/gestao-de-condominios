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
        $admin->email = 'root@erickfirmo.dev';
        $admin->foto_de_perfil = '#';
        $admin->password = bcrypt('123456');
        $admin->role_id = 1;
        $admin->remember_token = str_random(10);
        $admin->save();
    }
}