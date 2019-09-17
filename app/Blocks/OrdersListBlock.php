<?php

namespace App\Blocks;
use App\Order;

class OrdersListBlock implements Block
{
    public function onLoad($page)
    {
        
        $page['datasets']['list'] = [
            "columns" =>   Order::getTableColumns(),
            "rows" => Order::all()
        ];

        if(!is_null($page['request']->input("sort"))){
            $page['datasets']['list']['rows'] = Order::orderBy(
                    $page['request']->input("sort"), 
                    $page['request']->input("order"))->get();
        }

        if(!is_null($page['request']->input("search"))){
            $page['datasets']['list']['rows'] =  Order::where('title', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('title', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('slug', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('description', "LIKE", '%' . $page['request']->input("search") . '%')
            ->orWhere('keywords', "LIKE", '%' . $page['request']->input("search") . '%')
            ->get();
        }

        return $page;
    }

}