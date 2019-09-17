<?php

namespace App\Http\Controllers\Admin\Reviews;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ListController extends Controller
{

    protected $name = "reviews";
    protected $model = \App\Reviews::class;
    protected $roleModel = \App\Role::class;
    protected $searchColumns = [
        'title',
        'slug',
        'description',
        'keywords'
    ];

    public function index(Request $request)
    {
        $this->getPage($request);
        

        $this->addDataSet(
            $this->name, 
            $this->model::all(),
            []
        ); 

        


        if(!is_null($this->page['request']->input("sort"))){
            $this->addDataSet(
                $this->name, 
                $this->model::orderBy(
                    $this->page['request']->input("sort"), 
                    $this->page['request']->input("order"))->get(),
                []
            );
                
        }

        if(!is_null($this->page['request']->input("search"))){
            
                $this->addDataSet(
                    $this->name,
                    $this->model::where('name', "LIKE", '%' . $this->page['request']->input("search") . '%')->get(),
                   []
                );

                
        }
        
        return view($this->page['view'], $this->page);
    }
}