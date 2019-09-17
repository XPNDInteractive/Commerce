<?php

namespace App\Http\Controllers\Admin\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
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
        
        if($request->has('menu'))
        {
            $menu = Menu::where('id', $request->input('menu'))->first();

            if(is_null($menu)){
                abort(404);
            }
        }

        $this->addDataSet(
            'menu', 
            $menu,
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
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $page = Menu::where('id', $request->input('menu'))->first();
        $page->name = $request->input("name");
        $page->description = $request->input("description");
        $page->active = $request->input("active") == "on" ? true:false;
        $page->user_id = $request->user()->id;
        $page->update();

        
        $roles = [];
        if($request->has('roles')){
            foreach($request->input('roles') as $id => $val){
                
               $roles[] = $id;
            }
        }

        $page->roles()->sync($roles);

        return  redirect('/admin/menu/')->with("success", "Menu " . $request->input("name") . " was saved successfully.");
    }
}