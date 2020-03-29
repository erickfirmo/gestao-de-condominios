<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $permission = new App\Models\Permission;
        $permission->name = '';
        $permission->key = '';
        $permission->controller = 'EmpresaController';
        $permission->method = 'index';
        $permission->save();
        $permission_ids[] = $permission->id;



        $permission_ids = [];
        foreach (Route::getRoutes()->getRoutes() as $key => $route)
        {
            $action = $route->getActionname();
            $_action = explode('@',$action);
            $controller = $_action[0];
            $method = end($_action);
            $permission_check = App\Models\Permission::where(['controller' => $controller, 'method' => $method])
                ->first();

            if(!$permission_check){
                $permission = new App\Models\Permission;
                $permission->controller = $controller;
                $permission->method = $method;
                $permission->save();
                $permission_ids[] = $permission->id;
            }
        }
        $admin_role = App\Models\Role::where("name","admin")->first();
        $admin_role->permissions()->attach($permission_ids);

    }


    











}
