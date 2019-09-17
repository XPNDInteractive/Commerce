<?php

namespace App\Http\Controllers\Admin\MenuItems;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use App\MenuItem;
use App\Role;
use Validator;


class UpdateController extends Controller
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
        $this->getPage($request);
        
        $menu = Menu::where("id", $request->input('menu'))->first();

        
        if(is_null($menu)){
            abort(500);
        }

        $this->addDataSet(
            'link', 
            MenuItem::where('id', $request->input('link'))->first(),
            []
        ); 

       
        
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

      
        $page = MenuItem::where('id', $request->input('link'))->first();
        
        $page->name = $request->input("name");
        $page->path = $request->input("path");
        $page->parent_id = $request->input("parent");
        $page->description = $request->input("description");
        $page->active = $request->input("active") == "on" ? true:false;
        $page->user_id = $request->user()->id;
        $page->update();

        $roles = [];
        if($request->has('roles')){
            foreach($request->input('roles') as $id => $val){
                
               $roles[$request->input('link') ] = $id;
            }
        }

        $page->roles()->sync($roles);

        $page->menu()->sync(Menu::where('id', $request->input('menu'))->first());

        return  redirect('/admin/menu/update?menu='. $request->input('menu'))->with("success", "Menu Link " . $request->input("name") . " was successfully updated.");
    }
}