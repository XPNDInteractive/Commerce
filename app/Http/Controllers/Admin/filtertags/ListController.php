<?php

namespace App\Http\Controllers\Admin\FilterTags;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;


class ListController extends Controller
{

    protected $name = "menu";
    protected $model = \App\MenuItem::class;
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
        
        $menu = Menu::where("id", $request->input('menu'))->first();
        
        if(is_null($menu)){
            redirect()->back();
        }



        $this->getPage($request);
        
        $this->addDataSet(
            'links', 
            $menu->menuItems()->get(),
            []
        ); 

        $this->addDataSet(
            'roles', 
            $this->roleModel::all(),
            []
        ); 
        
        return view($this->page['view'], $this->page);
        
       
    }
}