<?php

namespace App\Blocks;
use App\Filter;

class FiltersListBlock implements Block
{
    public function onLoad($page)
    {
        
        $page['datasets']['list'] = [
            "columns" =>   Filter::getTableColumns(),
            "rows" => Filter::all()
        ];

        if(!is_null($page['request']->input("sort"))){
            $page['datasets']['list']['rows'] = Filter::orderBy(
                    $page['request']->input("sort"), 
                    $page['request']->input("order"))->get();
        }

        if(!is_null($page['request']->input("search"))){
            $page['datasets']['list']['rows'] =  Filter::where('title', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('title', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('slug', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('description', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('keywords', "LIKE", '%' . $page['request']->input("search") . '%')
            ->get();
        }

        return $page;
    }

}