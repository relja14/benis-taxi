<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->save();

        $role_driver = new Role();
        $role_driver->name = 'driver';
        $role_driver->save();

        $role_driver2 = new Role();
        $role_driver2->name = 'driver';
        $role_driver2->save();
    }
}
