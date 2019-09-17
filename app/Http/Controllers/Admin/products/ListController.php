<?php

namespace App\Http\Controllers\Admin\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ListController extends Controller
{

    protected $name = "products";
    protected $model = \App\Product::class;
    protected $searchColumns = [
        'title',
        'slug',
        'description',
        'keywords'
    ];

    public function index(Request $request)
    {
        $this->getPage($request);
        
        $attrs = [];

    
       

        $this->addDataSet(
            $this->name, 
            $this->model::all(),
            []
        ); 


        if(!is_null($this->page['request']->input("sort"))){
            $this->addDataSet(
                $this->name, 
                $this->model::with('attributeValues')->orderBy(
                    $this->page['request']->input("sort"), 
                    $this->page['request']->input("order"))->get(),
                $attrs
            );
                
        }

        if(!is_null($this->page['request']->input("search"))){
            
                $this->addDataSet(
                    $this->name,
                    $this->model::where('title', "LIKE", '%' . $this->page['request']->input("search") . '%')
                        ->orWhere('title', "LIKE", '%' . $this->page['request']->input("search") . '%')
                        ->orWhere('slug', "LIKE", '%' . $this->page['request']->input("search") . '%')
                        ->orWhere('description', "LIKE", '%' . $this->page['request']->input("search") . '%')
                        ->orWhere('keywords', "LIKE", '%' . $this->page['request']->input("search") . '%')
                        ->get(),
                        $attrs
                );

                
        }
        
        return view($this->page['view'], $this->page);
    }
}