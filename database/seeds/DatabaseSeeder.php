<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(UfsTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
        $this->call(CondominiosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ImoveisTableSeeder::class);
        $this->call(ImagensTableSeeder::class);
        $this->call(ImagensDasEntidadesTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);

    }
}
