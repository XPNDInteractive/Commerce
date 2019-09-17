<?php

namespace App\Blocks;
use App\Product;
use App\Category;

class ProductListBlock implements Block
{
    public function onLoad($page)
    {
        
        $page['datasets']['list'] = [
            "columns" =>   Product::getTableColumns(),
            "rows" => Product::with('categories')->get()
        ];


        if(!is_null($page['request']->input("sort"))){
            $page['datasets']['list']['rows'] = Product::orderBy(
                    $page['request']->input("sort"), 
                    $page['request']->input("order"))->get();
        }

        if(!is_null($page['request']->input("search"))){
            $page['datasets']['list']['rows'] =  Product::where('name', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('price', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('sku', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('slug', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('description', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('keywords', "LIKE", '%' . $page['request']->input("search") . '%')
            ->get();

        }

        return $page;
    }

}


