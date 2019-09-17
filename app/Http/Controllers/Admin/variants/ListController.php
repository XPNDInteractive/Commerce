<?php

namespace App\Http\Controllers\Admin\Variants;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attribute;

class ListController extends Controller
{

    protected $name = "variants";
    protected $model = \App\Variant::class;
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

        foreach( $this->model::with('attributeValues')->get() as $row){
            foreach($row->attributeValues()->get() as $attrValue){
                $attrs[$attrValue->attributes()->first()->name] = $attrValue->attributes()->first()->name;
            }
        }

       

        $this->addDataSet(
            $this->name, 
            $this->model::all(),
            $attrs
        ); 

        $this->addDataSet(
            'attributes', 
            Attribute::all(),
            []
        ); 


        if(!is_null($this->page['request']->input("sort"))){
            $this->addDataSet(
                $this->name, 
                $this->model::orderBy(
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