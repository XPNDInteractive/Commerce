<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Menu;
use App\MenuItem;
use App\User;
use App\Role;
use App\Page;
use App\Filter;


class CategoryTableSeeder extends Seeder
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



       
       
        $category = new Category();
        $category->name = "Men's";
        $category->slug = "category/mens";
        $category->user_id = $user->id;
        $category->active = true;
        $category->save();

        foreach(Filter::where('active', true)->get() as $filter){
            $category->filters()->attach($filter);
        }
       

        $category = new Category();
        $category->name = "Women's";
        $category->slug = "category/womens";
        $category->user_id = $user->id;
        $category->active = true;
        $category->save();

        foreach(Filter::where('active', true)->get() as $filter){
            $category->filters()->attach($filter);
        }

        $category = new Category();
        $category->name = "Accessories";
        $category->slug = "category/accessories";
        $category->user_id = $user->id;
        $category->active = true;
        $category->save();

        foreach(Filter::where('active', true)->get() as $filter){
            $category->filters()->attach($filter);
        }

        $category = new Category();
        $category->name = "Collections";
        $category->slug = "category/collections";
        $category->user_id = $user->id;
        $category->active = true;
        $category->save();

        foreach(Filter::where('active', true)->get() as $filter){
            $category->filters()->attach($filter);
        }

        $category = new Category();
        $category->name = "Deals";
        $category->slug = "category/deals";
        $category->user_id = $user->id;
        $category->active = true;
        $category->save();

        foreach(Filter::where('active', true)->get() as $filter){
            $category->filters()->attach($filter);
        }

        $category = new Category();
        $category->name = "Featured";
        $category->slug = "featured";
        $category->user_id = $user->id;
        $category->active = true;
        $category->save();

        foreach(Filter::where('active', true)->get() as $filter){
            $category->filters()->attach($filter);
        }
       

        $category = new Category();
        $category->name = "Popular";
        $category->slug = "popular";
        $category->user_id = $user->id;
        $category->active = true;
        $category->save();

        foreach(Filter::where('active', true)->get() as $filter){
            $category->filters()->attach($filter);
        }
        
        $category->parents()->attach(Category::where('name', "Men's")->first());
        $category->parents()->attach(Category::where('name', "Women's")->first());
        $category->parents()->attach(Category::where('name', "Accessories")->first());

        $category = new Category();
        $category->name = "Top Sellers";
        $category->slug = "top-sellers";
        $category->user_id = $user->id;
        $category->active = true;
        $category->save();

        foreach(Filter::where('active', true)->get() as $filter){
            $category->filters()->attach($filter);
        }
        
        $category->parents()->attach(Category::where('name', "Men's")->first());
        $category->parents()->attach(Category::where('name', "Women's")->first());
        $category->parents()->attach(Category::where('name', "Accessories")->first());

        $category = new Category();
        $category->name = "New Arrivals";
        $category->slug = "new-arrivals";
        $category->user_id = $user->id;
        $category->active = true;
        $category->save();

        foreach(Filter::where('active', true)->get() as $filter){
            $category->filters()->attach($filter);
        }
        
        $category->parents()->attach(Category::where('name', "Men's")->first());
        $category->parents()->attach(Category::where('name', "Women's")->first());
        $category->parents()->attach(Category::where('name', "Accessories")->first());


        $categories = Category::all();
        
        foreach($categories as $cat){
            $page = new Page();
            $page->title = $cat->name;
            $page->slug = $cat->slug;
            $page->keywords = "biill, boo, bom, bip, bol";
            $page->template = "category";
            $page->is_admin = false;
            $page->user_id = 1;
            $page->active = true;
            $page->save();
            $page->roles()->attach($roles);

            if($cat->name !== 'Featured' && 
                $cat->name !== 'New Arrivals' && 
                $cat->name !== 'Top Sellers' && $cat->name !== 'Popular'){
                $menuItem = new MenuItem();
                $menuItem->name = $cat->name;
                $menuItem->path = $cat->slug;
                $menuItem->user_id = $user->id;
                $menuItem->active = true;
                $menuItem->save();
                $menuItem->menu()->attach(Menu::where('name', 'categories menu')->first());
                $menuItem->roles()->attach($roles);
            }
            

        }



    }
}
