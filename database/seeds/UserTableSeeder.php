<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$role_admin = Role::where('name', 'admin')->first();
    	$role_driverOne = Role::where('name', 'driver')->first();

        $userOne = new User();
        $userOne->first_name = 'Nikola';
        $userOne->last_name = 'Reljin';
        $userOne->username = 'relj14';
        $userOne->email = 'relja14@yahoo.com';
        $userOne->phone_number = '+4369124321412';
        $userOne->save();
        $userOne->roles()->attach($role_admin);

        $userTwo = new User();
        $userTwo->first_name = 'Benjamin';
        $userTwo->last_name = 'Secic';
        $userTwo->username = 'benjamin78';
        $userTwo->email = 'benjamin.secic78@yahoo.com';
        $userTwo->phone_number = '+436914212';
        $userTwo->save();
        $userTwo->roles()->attach($role_driverOne);

        $userThree = new User();
        $userThree->first_name = 'Marinko';
        $userThree->last_name = 'Torbica';
        $userThree->username = 'mare021';
        $userThree->email = 'mare023@yahoo.com';
        $userThree->phone_number = '+434269124321412';
        $userThree->save();
    }
}
