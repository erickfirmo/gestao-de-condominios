<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sindico
        $permission_role = new App\Models\PermissionRole;
        $permission_role->role_id = 2;
        $permission_role->permission_id = 1;
        $permission_role->save();

        $permissions = $this->getPermissions();
        $roles = $this->getRoles();



    }

    public function getPermissions()
    {
        return App\Models\Permission::all();
    }


    public function getRoles()
    {
        return App\Models\Role::all();
    }
}
