<?php

use Illuminate\Database\Seeder;
use App\Page;
use App\Role;
use App\User;
use App\Block;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('id', 1)->first();
        $roles = Role::all();
        $admin = Role::where('name', 'admin')->first();

        $page = new Page();
        $page->title = "Front Page";
        $page->slug = '/';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "front";
        $page->is_front_page = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($roles);

        $page = new Page();
        $page->title = "Admin";
        $page->slug = 'admin';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "dashboard";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'product list')->first());

        $page = new Page();
        $page->title = "Pages";
        $page->slug = 'admin/pages';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "pages.list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'page list')->first());
        $page->blocks()->attach(Block::where('name', 'pages toolbar')->first());

        $page = new Page();
        $page->title = "Products";
        $page->slug = 'admin/products';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "products/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'product list')->first());
        $page->blocks()->attach(Block::where('name', 'products toolbar')->first());

        $page = new Page();
        $page->title = "Products";
        $page->slug = 'admin/products/create';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "products/create";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'product list')->first());
        $page->blocks()->attach(Block::where('name', 'products toolbar')->first());

        $page = new Page();
        $page->title = "Variant Product Create";
        $page->slug = 'admin/products/variant';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "products/variant";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'product list')->first());
        $page->blocks()->attach(Block::where('name', 'products toolbar')->first());

        $page = new Page();
        $page->title = "Products";
        $page->slug = 'admin/products/update';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "products/update";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'product list')->first());
        $page->blocks()->attach(Block::where('name', 'products toolbar')->first());

        $page = new Page();
        $page->title = "Inventory";
        $page->slug = 'admin/inventory';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "inventory/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'product list')->first());
        $page->blocks()->attach(Block::where('name', 'products toolbar')->first());

        $page = new Page();
        $page->title = "Categories";
        $page->slug = 'admin/categories';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "categories/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'categories list')->first());
        $page->blocks()->attach(Block::where('name', 'categories toolbar')->first());

        $page = new Page();
        $page->title = "Create Category";
        $page->slug = 'admin/categories/create';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "categories/create";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'categories list')->first());
        $page->blocks()->attach(Block::where('name', 'categories toolbar')->first());

        $page = new Page();
        $page->title = "Update Category";
        $page->slug = 'admin/categories/update';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "categories/update";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'categories list')->first());
        $page->blocks()->attach(Block::where('name', 'categories toolbar')->first());

        $page = new Page();
        $page->title = "Reviews";
        $page->slug = 'admin/reviews';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "reviews/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'categories list')->first());
        $page->blocks()->attach(Block::where('name', 'categories toolbar')->first());

        $page = new Page();
        $page->title = "Create Review";
        $page->slug = 'admin/reviews/create';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "reviews/create";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'categories list')->first());
        $page->blocks()->attach(Block::where('name', 'categories toolbar')->first());

        $page = new Page();
        $page->title = "Update Review";
        $page->slug = 'admin/reviews/update';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "reviews/update";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'categories list')->first());
        $page->blocks()->attach(Block::where('name', 'categories toolbar')->first());

        
        $page = new Page();
        $page->title = "Sizes";
        $page->slug = 'admin/sizes';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "sizes/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'categories list')->first());
        $page->blocks()->attach(Block::where('name', 'categories toolbar')->first());

        $page = new Page();
        $page->title = "Create Sizes";
        $page->slug = 'admin/sizes/create';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "sizes/create";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'categories list')->first());
        $page->blocks()->attach(Block::where('name', 'categories toolbar')->first());

        $page = new Page();
        $page->title = "Update Sizes";
        $page->slug = 'admin/sizes/update';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "sizes/update";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'categories list')->first());
        $page->blocks()->attach(Block::where('name', 'categories toolbar')->first());

        $page = new Page();
        $page->title = "Attributes";
        $page->slug = 'admin/attributes';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "attributes/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'attributes list')->first());

        $page = new Page();
        $page->title = "Create Attribute";
        $page->slug = 'admin/attributes/create';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "attributes/create";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'attributes list')->first());

        $page = new Page();
        $page->title = "Update Attribute";
        $page->slug = 'admin/attributes/update';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "attributes/update";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'attributes list')->first());

        $page = new Page();
        $page->title = "Filters";
        $page->slug = 'admin/filters';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "filters/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'filters list')->first());

        $page = new Page();
        $page->title = "Create Filter";
        $page->slug = 'admin/filters/create';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "filters/create";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'filters list')->first());

        $page = new Page();
        $page->title = "Create Update";
        $page->slug = 'admin/filters/update';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "filters/update";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'filters list')->first());

        $page = new Page();
        $page->title = "Menu";
        $page->slug = 'admin/menu';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "menu/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'menu list')->first());

        $page = new Page();
        $page->title = "Media";
        $page->slug = 'admin/media';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "media/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'menu list')->first());

        $page = new Page();
        $page->title = "Media Create";
        $page->slug = 'admin/media/create';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "media/create";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'menu list')->first());

        $page = new Page();
        $page->title = "Media Create";
        $page->slug = 'admin/media/update';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "media/update";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'menu list')->first());



        $page = new Page();
        $page->title = "Users";
        $page->slug = 'admin/users';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "users/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'users list')->first());

        $page = new Page();
        $page->title = "Roles";
        $page->slug = 'admin/roles';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "roles/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'roles list')->first());

        
        $page = new Page();
        $page->title = "Blocks";
        $page->slug = 'admin/blocks';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "blocks/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'blocks list')->first());

        $page = new Page();
        $page->title = "Orders";
        $page->slug = 'admin/orders';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "orders/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'orders list')->first());

        $page = new Page();
        $page->title = "Campaigns";
        $page->slug = 'admin/campaigns';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "campaigns/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'sales list')->first());


        $page = new Page();
        $page->title = "Create Page";
        $page->slug = 'admin/pages/create';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "pages/create";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'create')->first());
        $page->blocks()->attach(Block::where('name', 'blocks list')->first());
        $page->blocks()->attach(Block::where('name', 'roles list')->first());

        $page = new Page();
        $page->title = "Create Inventory";
        $page->slug = 'admin/inventory/create';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "inventory/create";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'create')->first());
        $page->blocks()->attach(Block::where('name', 'blocks list')->first());
        $page->blocks()->attach(Block::where('name', 'roles list')->first());

        $page = new Page();
        $page->title = "Update Inventory";
        $page->slug = 'admin/inventory/update';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "inventory/update";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'menu list')->first());

        

        $page = new Page();
        $page->title = "Create Menu";
        $page->slug = 'admin/menu/create';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "menu/create";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'create')->first());

        $page = new Page();
        $page->title = "Update Menu";
        $page->slug = 'admin/menu/update';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "menu/update";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'create')->first());


        
        $page = new Page();
        $page->title = "Create Menu Links";
        $page->slug = 'admin/menu/items';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "menuitems/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'create')->first());

        $page = new Page();
        $page->title = "Create Menu Links";
        $page->slug = 'admin/menu/item/create';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "menuitems/create";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'create')->first());

        $page = new Page();
        $page->title = "Create Menu Links";
        $page->slug = 'admin/menu/item/update';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "menuitems/update";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'create')->first());
       
        

        $page = new Page();
        $page->title = "Attribute Values";
        $page->slug = 'admin/attribute/values';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "attributevalues/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'create')->first());

        $page = new Page();
        $page->title = "Create Attribute Value";
        $page->slug = 'admin/attribute/values/create';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "attributevalues/create";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'create')->first());

        $page = new Page();
        $page->title = "Create Attribute Value";
        $page->slug = 'admin/attribute/values/update';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "attributevalues/update";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();


        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'create')->first());
       
        
        $page = new Page();
        $page->title = "Filter Tag";
        $page->slug = 'admin/filter/tags';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "filtertags/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'create')->first());

        $page = new Page();
        $page->title = "Create Filter Tag";
        $page->slug = 'admin/filter/tag/create';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "filtertags/create";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'create')->first());

        $page = new Page();
        $page->title = "Create Filter Tag";
        $page->slug = 'admin/filter/tag/update';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "filtertags/update";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();


        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'create')->first());
       

        $page = new Page();
        $page->title = "Variants";
        $page->slug = 'admin/variants';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "variants/list";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'product list')->first());
        $page->blocks()->attach(Block::where('name', 'products toolbar')->first());

        $page = new Page();
        $page->title = "Create Variant";
        $page->slug = 'admin/variants/create';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "variants/create";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'product list')->first());
        $page->blocks()->attach(Block::where('name', 'products toolbar')->first());

        $page = new Page();
        $page->title = "Update Variant";
        $page->slug = 'admin/variants/update';
        $page->description = "some cool description";
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "variants/update";
        $page->is_admin = true;
        $page->user_id = $user->id;
        $page->active = true;
        $page->save();

        $page->roles()->attach($admin);
        $page->blocks()->attach(Block::where('name', 'admin navbar')->first());
        $page->blocks()->attach(Block::where('name', 'admin sidebar')->first());
        $page->blocks()->attach(Block::where('name', 'product list')->first());
        $page->blocks()->attach(Block::where('name', 'products toolbar')->first());
    }
}
