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
       
        $permissions = $this->getPermissions();
        $roles = $this->getRoles();

        foreach($roles as $role)
        {
            foreach($permissions as $permission)
            {
                $permission_role = new App\Models\PermissionRole;
                $permission_role->role_id = $role->id;
                $permission_role->permission_id = $permission->id;
                $permission_role->save();
            }
        }

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
