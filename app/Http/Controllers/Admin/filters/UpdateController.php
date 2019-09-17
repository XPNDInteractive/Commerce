<?php

namespace App\Http\Controllers\Admin\Filters;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filter;
use App\Category;
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
        
        if($request->has('filter'))
        {
            $attribute = Filter::where('id', $request->input('filter'))->first();

            if(is_null($attribute)){
                abort(404);
            }
        }

        $this->addDataSet(
            'categories', 
            Category::all(),
            []
        ); 


        $this->addDataSet(
            'filters', 
            $attribute,
            []
        ); 

        $this->addDataSet(
            'links', 
            $attribute->tags()->get(),
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

        $page = Filter::where('id', $request->input('filter'))->first();
        $page->name = $request->input("name");
        $page->description = $request->input("description");
        $page->active = $request->input("active") == "on" ? true:false;
        $page->user_id = $request->user()->id;
        $page->update();

        
        $roles = [];
        if($request->has('tags')){
            foreach($request->input('tags') as $id => $val){
                
               $roles[] = $id;
            }
        }

        if($request->has('categories')){
            foreach($request->input("categories") as $id => $status){
                $page->parents()->sync(Category::where('id', $id)->first());
            }
        }

        if(count($roles) > 0){
            $page->tags()->sync($roles);
        }
        

        return  redirect('/admin/filters/')->with("success", "Filter " . $request->input("name") . " was saved successfully.");
    }
}