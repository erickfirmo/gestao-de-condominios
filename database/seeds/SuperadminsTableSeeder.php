<?php
use Illuminate\Database\Seeder;

class SuperadminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = new App\Superadmin;
        $superadmin->name = 'Érick Firmo';
        $superadmin->email = 'root@erickfirmo.dev';
        $superadmin->foto_de_perfil = '#';
        $superadmin->password = bcrypt('psw');
        $superadmin->role_id = 1;
        $superadmin->remember_token = str_random(10);
        $superadmin->save();

    }

}