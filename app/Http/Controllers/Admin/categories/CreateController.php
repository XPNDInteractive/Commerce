<?php

namespace App\Http\Controllers\Admin\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Filter;
use App\Product;
use App\Page;
use App\Role;
use Validator;


class CreateController extends Controller
{

    protected $name = "categories";
    protected $model = \App\Category::class;
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
            $this->name, 
            $this->model::all(),
            []
        ); 

        $this->addDataSet(
            'categories', 
             Category::all(),
             []
        ); 

        $this->addDataSet(
            'filters', 
            Filter::all(),
            []
        ); 

        $this->addDataSet(
            'roles', 
            Role::all(),
            []
        ); 

        $this->addDataSet(
            'products', 
            Product::all(),
            []
        ); 

        return view($this->page['view'], $this->page);
    }

    public function save(Request $request){

        
       
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|unique:categories,name',
            'slug' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $page = new Category();
        $page->name = $request->input("name");
        $page->slug = $request->input("slug");
        $page->description = $request->input("description");
        $page->active = $request->input("active") == "on" ? true:false;
        $page->user_id = $request->user()->id;
        $page->save();

        if($request->has('categories')){
            foreach($request->input("categories") as $id => $status){
                $page->parents()->attach(Category::where('id', $id)->first());
            }
        }

        if($request->has('filters')){
            foreach($request->input("filters") as $id => $status){
                $page->filters()->attach(Filter::where('id', $id)->first());
            }
        }

        $page = new Page();
        $page->title = $request->input("name");
        $page->slug = $request->input("slug");
        $page->description = $request->input("description");
        $page->keywords = $request->input("keywords");
        $page->template = "category";
        $page->is_admin = false;
        $page->user_id = $request->user()->id;
        $page->active = true;
        $page->save();

        if($request->has('roles')){
            foreach($request->input("roles") as $id => $status){
                $page->roles()->attach(Role::where('id', $id)->first());
            }
        }



        return  redirect('/admin/categories')->with("success", "Category " . $request->input("name") . " was successfully added.");
    }
}