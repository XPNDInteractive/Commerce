<?php

namespace App\Http\Controllers\Admin\Filters;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filter;
use App\Category;
use Validator;


class CreateController extends Controller
{

    protected $name = "filters";
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
            'categories', 
            Category::all(),
            []
        ); 

        return view($this->page['view'], $this->page);
    }

    public function save(Request $request){
       
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|unique:attributes,name',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $page = new Filter();
        $page->name = $request->input("name");
        $page->description = $request->input("description");
        $page->active = $request->input("active") == "on" ? true:false;
        $page->user_id = $request->user()->id;
        $page->save();

        if($request->has('categories')){
            foreach($request->input("categories") as $id => $status){
                $page->categories()->attach(Category::where('id', $id)->first());
            }
        }

        return  redirect('/admin/filters/update?filter=' . Filter::where('name', $request->input("name"))->first()->id)->with("success", "Filter " . $request->input("name") . " was successfully added.");
    }
}