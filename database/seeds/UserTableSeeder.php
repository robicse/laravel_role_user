<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
//use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name','User')->first();
        $role_author = Role::where('name','Author')->first();
        $role_admin = Role::where('name','Admin')->first();
        $user = new User();
        $user->first_name = 'Robi';
        $user->last_name = 'Hasan';
        $user->email = 'robicse8@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->first_name = 'Babul';
        $admin->last_name = 'Hasan';
        $admin->email = 'babul401@gmail.com';
        $admin->password = bcrypt('123456');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $author = new User();
        $author->first_name = 'Test';
        $author->last_name = 'Tech';
        $author->email = 'test@gmail.com';
        $author->password = bcrypt('123456');
        $author->save();
        $author->roles()->attach($role_author);
    }
}
