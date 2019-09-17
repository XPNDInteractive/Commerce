<?php

use Illuminate\Database\Seeder;
use App\Block;

class BlockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $block = new Block();
        $block->name = "admin sidebar";
        $block->view = "sidebar";
        $block->active = true;
        $block->save();

        $block = new Block();
        $block->name = "categories toolbar";
        $block->view = "toolbar";
        $block->active = true;
        $block->save();

        $block = new Block();
        $block->name = "pages toolbar";
        $block->view = "toolbar";
        $block->active = true;
        $block->save();

        $block = new Block();
        $block->name = "products toolbar";
        $block->view = "toolbar";
        $block->active = true;
        $block->save();

        $block = new Block();
        $block->name = "admin navbar";
        $block->view = "navbar";
        $block->active = true;
        $block->save();

        $block = new Block();
        $block->name = "page list";
        $block->view = "list";
        $block->active = true;
        $block->save();

        $block = new Block();
        $block->name = "orders list";
        $block->view = "list";
        $block->active = true;
        $block->save();

        $block = new Block();
        $block->name = "product list";
        $block->view = "list";
        $block->active = true;
        $block->save();

        $block = new Block();
        $block->name = "categories list";
        $block->view = "list";
        $block->active = true;
        $block->save();

        $block = new Block();
        $block->name = "attributes list";
        $block->view = "list";
        $block->active = true;
        $block->save();

        
        $block = new Block();
        $block->name = "menu list";
        $block->view = "list";
        $block->active = true;
        $block->save();

        
        $block = new Block();
        $block->name = "filters list";
        $block->view = "list";
        $block->active = true;
        $block->save();

        
        $block = new Block();
        $block->name = "users list";
        $block->view = "list";
        $block->active = true;
        $block->save();

        $block = new Block();
        $block->name = "roles list";
        $block->view = "list";
        $block->active = true;
        $block->save();

        $block = new Block();
        $block->name = "blocks list";
        $block->view = "list";
        $block->active = true;
        $block->save();

        $block = new Block();
        $block->name = "sales list";
        $block->view = "list";
        $block->active = true;
        $block->save();


        $block = new Block();
        $block->name = "create";
        $block->view = "fields";
        $block->active = true;
        $block->save();
    }
}
