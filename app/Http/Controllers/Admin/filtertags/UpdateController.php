<?php

namespace App\Http\Controllers\Admin\FilterTags;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filter;
use App\FilterTag;
use App\Role;
use Validator;


class UpdateController extends Controller
{

    protected $name = "menu";
    protected $model = \App\FilterTag::class;
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
        
        $menu = Filter::where("id", $request->input('filter'))->first();

        
        if(is_null($menu)){
            abort(500);
        }

        $this->addDataSet(
            'link', 
            FilterTag::where('id', $request->input('tag'))->first(),
            []
        ); 

       
        
        $this->addDataSet(
            'links', 
            $menu->tags()->get(),
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
            'name' => 'required',
            'filter' => 'required',
            'id' => 'required'
          
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

      
        $page = FilterTag::where('id', $request->input('id'))->first();
        
        $page->name = $request->input("name");
        $page->description = $request->input("description");
     
        $page->update();

        return  redirect('/admin/filters/update?filter='. $request->input('filter'))->with("success", "Filter Tag " . $request->input("name") . " was successfully updated.");
    }
}