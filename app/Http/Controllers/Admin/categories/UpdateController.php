<?php

namespace App\Http\Controllers\Admin\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filter;
use App\Category;
use App\Product;
use Validator;


class UpdateController extends Controller
{

    protected $name = "filter";
    protected $model = \App\FilterTags::class;
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
        
        if($request->has('category'))
        {
            $attribute = Category::where('id', $request->input('category'))->first();

            if(is_null($attribute)){
                abort(404);
            }

            $this->addDataSet(
               'category', 
                $attribute,
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
                'products', 
                Product::all(),
                []
            ); 

        }

       
        return view($this->page['view'], $this->page);
    }

    public function save(Request $request){
       
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'slug' => 'required',
            'category' => 'required'
        ]);


        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $page = Category::where("id", $request->input('category'))->first();
        $page->name = $request->input("name");
        $page->slug = $request->input("slug");
        $page->description = $request->input("description");
        $page->filter_id = $request->input("filters");
        $page->active = $request->input("active") == "on" ? true:false;
        $page->user_id = $request->user()->id;
        $page->update();

        if($request->has('categories')){
            foreach($request->input("categories") as $id => $status){
                $page->parents()->attach(Category::where('id', $id)->first());
            }
        }

        
        $roles = [];
        if($request->has('categories')){
            foreach($request->input('categories') as $id => $val){
                
               $roles[] = $id;
            }
        }
        

        return  redirect('/admin/categories/')->with("success", "Category " . $request->input("name") . " was saved successfully.");
    }
}