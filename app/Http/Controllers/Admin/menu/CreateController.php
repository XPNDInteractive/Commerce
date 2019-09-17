<?php

namespace App\Http\Controllers\Admin\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
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
        $this->getPage($request);
        
        $this->addDataSet(
            'links', 
            $this->model::all(),
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
            'name' => 'required|max:255|unique:menus,name',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $page = new Menu();
        $page->name = $request->input("name");
        $page->description = $request->input("description");
        $page->active = $request->input("active") == "on" ? true:false;
        $page->user_id = $request->user()->id;
        $page->save();

        if($request->has('roles')){
            foreach($request->input('roles') as $id => $val){
                
                $page->roles()->attach(Role::where('id', $id)->first());
            }
        }

        return  redirect('/admin/menu/update?menu=' . Menu::where('name', $request->input("name"))->first()->id)->with("success", "Menu " . $request->input("name") . " was successfully added.");
    }
}