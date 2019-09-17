<?php

namespace App\Http\Controllers\Admin\MenuItems;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use App\MenuItem;
use App\Role;
use Validator;


class CreateController extends Controller
{

    protected $name = "menu";
    protected $model = \App\MenuItem::class;
    protected $roleModel = \App\Role::class;
    protected $pagesModel = \App\Page::class;
    protected $searchColumns = [
        'title',
        'slug',
        'description',
        'keywords'
    ];

    public function index(Request $request)
    {
        $menu = Menu::where("id", $request->input('menu'))->first();
        
        if(is_null($menu)){
            abort(500);
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

        $this->addDataSet(
            'pages', 
            $this->pagesModel::all(),
            []
        ); 
        
        return view($this->page['view'], $this->page);
    }

    public function save(Request $request){
       //dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'path' => 'required|url',
            'menu' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $page = new MenuItem();
        $page->name = $request->input("name");
        $page->path = $request->input("path");
        
        $page->parent_id = $request->input("parent");
   
        
        $page->description = $request->input("description");
        $page->active = $request->input("active") == "on" ? true:false;
        $page->user_id = $request->user()->id;
        $page->save();

        if($request->has('roles')){
            foreach($request->input('roles') as $id => $val){
                
                $page->roles()->attach(Role::where('id', $id)->first());
            }
        }

        $page->menu()->attach(Menu::where('id', $request->input('menu'))->first());

        return  redirect('/admin/menu/update?menu='. $request->input('menu'))->with("success", "Menu Link " . $request->input("name") . " was successfully added.");
    }
}