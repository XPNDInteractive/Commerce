<?php

namespace App\Http\Controllers\Admin\Campaigns;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ListController extends Controller
{

    protected $name = "campaigns";
    protected $model = \App\Campaign::class;
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
            $this->model::getTableColumns()
        ); 


        if(!is_null($this->page['request']->input("sort"))){
            $this->addDataSet(
                $this->name, 
                $this->model::orderBy(
                    $this->page['request']->input("sort"), 
                    $this->page['request']->input("order"))->get(),
                $this->model::getTableColumns()
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
                    $this->model::getTableColumns()
                );

                
        }
        
        return view($this->page['view'], $this->page);
    }
}