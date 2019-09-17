<?php

namespace App\Blocks;
use App\Category;

class CategoriesListBlock implements Block
{
    public function onLoad($page)
    {
        
        $page['datasets']['list'] = [
            "columns" =>   Category::getTableColumns(),
            "rows" => Category::all()
        ];

        if(!is_null($page['request']->input("sort"))){
            $page['datasets']['list']['rows'] = Category::orderBy(
                    $page['request']->input("sort"), 
                    $page['request']->input("order"))->get();
        }

        if(!is_null($page['request']->input("search"))){
            $page['datasets']['list']['rows'] =  Category::where('title', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('title', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('slug', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('description', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('keywords', "LIKE", '%' . $page['request']->input("search") . '%')
            ->get();
        }

        return $page;
    }

}


