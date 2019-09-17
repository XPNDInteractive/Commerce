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
        $role = new Role();
        $role->name = "system";
        $role->description = "the system role";
        $role->active = true;
        $role->user_id = 1;
        $role->save();

        $role = new Role();
        $role->name = "guest";
        $role->description = "the guest role";
        $role->active = true;
        $role->user_id = 1;
        $role->save();

        $role = new Role();
        $role->name = "admin";
        $role->description = "the site administrator";
        $role->active = true;
        $role->user_id = 1;
        $role->save();
    }
}
