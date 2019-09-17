<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = "Joshua Getner";
        $user->email = "jgetner@gmail.com";
        $user->password = bcrypt("eclipse1");
        $user->active = true;
        $user->save();
        $user->roles()->attach($admin);

        $user = new User();
        $user->name = "Jimmy";
        $user->email = "jimmy@xpndinteractive.com";
        $user->password = bcrypt("123");
        $user->active = true;
        $user->save();
        $user->roles()->attach($admin);

        $user = new User();
        $user->name = "Jessica";
        $user->email = "Jessica@arcticcool.com";
        $user->password = bcrypt("123");
        $user->active = true;
        $user->save();
        $user->roles()->attach($admin);

        $user = new User();
        $user->name = "Eric";
        $user->email = "eric@arcticcool.com";
        $user->password = bcrypt("123");
        $user->active = true;
        $user->save();
        $user->roles()->attach($admin);

        
        $user = new User();
        $user->name = "craig";
        $user->email = "craig@arcticcool.com";
        $user->password = bcrypt("123");
        $user->active = true;
        $user->save();
        $user->roles()->attach($admin);
    }
}
