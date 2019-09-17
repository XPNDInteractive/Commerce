<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\User;
use App\Menu;
use App\MenuItem;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('id', 1)->first();
        $admin = Role::where('name', 'admin')->first();
        $roles = Role::all();

        $menu = new Menu();
        $menu->name = "main menu";
        $menu->user_id = $user->id;
        $menu->active = true;
        $menu->save();
        $menu->roles()->attach($roles);

        $menu = new Menu();
        $menu->name = "admin menu";
        $menu->user_id = $user->id;
        $menu->active = true;
        $menu->save();
        $menu->roles()->attach($admin);

        $menu = new Menu();
        $menu->name = "categories menu";
        $menu->user_id = $user->id;
        $menu->active = true;
        $menu->save();
        $menu->roles()->attach($roles);

        $adminMenu = Menu::where('name', 'admin menu')->first();

        $menuItem = new MenuItem();
        $menuItem->name = 'Dashboard';
        $menuItem->path = '/admin';
        $menuItem->user_id = $user->id;
        $menuItem->active = true;
        $menuItem->save();
        $menuItem->menu()->attach($adminMenu);
        $menuItem->roles()->attach($roles);
       
        $menuItem = new MenuItem();
        $menuItem->name = 'Products';
        $menuItem->path = '/admin/products';
        $menuItem->user_id = $user->id;
        $menuItem->active = true;
        $menuItem->save();
        $menuItem->menu()->attach($adminMenu);
        $menuItem->roles()->attach($roles);

        $menuItem = new MenuItem();
        $menuItem->name = 'Media';
        $menuItem->path = '/admin/media';
        $menuItem->user_id = $user->id;
        $menuItem->active = true;
        $menuItem->save();
        $menuItem->menu()->attach($adminMenu);
        $menuItem->roles()->attach($roles);
       
        $menuItem = new MenuItem();
        $menuItem->name = 'Pages';
        $menuItem->path = '/admin/pages';
        $menuItem->user_id = $user->id;
        $menuItem->active = true;
        $menuItem->save();
        $menuItem->menu()->attach($adminMenu);
        $menuItem->roles()->attach($roles);

        $menuItem = new MenuItem();
        $menuItem->name = 'Menu';
        $menuItem->path = '/admin/menu';
        $menuItem->parent_id = MenuItem::where('name', 'Pages')->first()->id;
        $menuItem->user_id = $user->id;
        $menuItem->active = true;
        $menuItem->save();
        $menuItem->menu()->attach($adminMenu);
        $menuItem->roles()->attach($roles);

        

        $menuItem = new MenuItem();
        $menuItem->name = 'Categories';
        $menuItem->path = '/admin/categories';
        $menuItem->parent_id = MenuItem::where('name', 'Products')->first()->id;
        $menuItem->user_id = $user->id;
        $menuItem->active = true;
        $menuItem->save();
        $menuItem->menu()->attach($adminMenu);
        $menuItem->roles()->attach($roles);

        $menuItem = new MenuItem();
        $menuItem->name = 'Attributes';
        $menuItem->path = '/admin/attributes';
        $menuItem->parent_id = MenuItem::where('name', 'Products')->first()->id;
        $menuItem->user_id = $user->id;
        $menuItem->active = true;
        $menuItem->save();
        $menuItem->menu()->attach($adminMenu);
        $menuItem->roles()->attach($roles);

        $menuItem = new MenuItem();
        $menuItem->name = 'Filters';
        $menuItem->path = '/admin/filters';
        $menuItem->parent_id = MenuItem::where('name', 'Products')->first()->id;
        $menuItem->user_id = $user->id;
        $menuItem->active = true;
        $menuItem->save();
        $menuItem->menu()->attach($adminMenu);
        $menuItem->roles()->attach($roles);

        $menuItem = new MenuItem();
        $menuItem->name = 'Variants';
        $menuItem->path = '/admin/variants';
        $menuItem->parent_id = MenuItem::where('name', 'Products')->first()->id;
        $menuItem->user_id = $user->id;
        $menuItem->active = true;
        $menuItem->save();
        $menuItem->menu()->attach($adminMenu);
        $menuItem->roles()->attach($roles);

        $menuItem = new MenuItem();
        $menuItem->name = 'Reviews & Ratings';
        $menuItem->path = '/admin/reviews';
        $menuItem->parent_id = MenuItem::where('name', 'Products')->first()->id;
        $menuItem->user_id = $user->id;
        $menuItem->active = true;
        $menuItem->save();
        $menuItem->menu()->attach($adminMenu);
        $menuItem->roles()->attach($roles);

        $menuItem = new MenuItem();
        $menuItem->name = 'Size Charts';
        $menuItem->path = '/admin/sizes';
        $menuItem->parent_id = MenuItem::where('name', 'Products')->first()->id;
        $menuItem->user_id = $user->id;
        $menuItem->active = true;
        $menuItem->save();
        $menuItem->menu()->attach($adminMenu);
        $menuItem->roles()->attach($roles);


        $menuItem = new MenuItem();
        $menuItem->name = 'Orders';
        $menuItem->path = '/admin/orders';
        $menuItem->parent_id = MenuItem::where('name', 'Products')->first()->id;
        $menuItem->user_id = $user->id;
        $menuItem->active = true;
        $menuItem->save();
        $menuItem->menu()->attach($adminMenu);
        $menuItem->roles()->attach($roles);

        $menuItem = new MenuItem();
        $menuItem->name = 'Customers';
        $menuItem->path = '/admin/customers';
        $menuItem->parent_id = MenuItem::where('name', 'Products')->first()->id;
        $menuItem->user_id = $user->id;
        $menuItem->active = true;
        $menuItem->save();
        $menuItem->menu()->attach($adminMenu);
        $menuItem->roles()->attach($roles);

        $menuItem = new MenuItem();
        $menuItem->name = 'Users';
        $menuItem->path = '/admin/users';
        $menuItem->user_id = $user->id;
        $menuItem->active = true;
        $menuItem->save();
        $menuItem->menu()->attach($adminMenu);
        $menuItem->roles()->attach($roles);

        $menuItem = new MenuItem();
        $menuItem->name = 'Roles';
        $menuItem->path = '/admin/roles';
        $menuItem->parent_id = MenuItem::where('name', 'Users')->first()->id;
        $menuItem->user_id = $user->id;
        $menuItem->active = true;
        $menuItem->save();
        $menuItem->menu()->attach($adminMenu);
        $menuItem->roles()->attach($roles);
       
        
    }
}
