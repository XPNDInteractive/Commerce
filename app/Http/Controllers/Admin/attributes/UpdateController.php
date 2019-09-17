<?php

namespace App\Http\Controllers\Admin\Attributes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attribute;
use App\Role;
use App\Filter;
use Validator;


class UpdateController extends Controller
{

    protected $name = "attribute";
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
        
        if($request->has('attribute'))
        {
            $attribute = Attribute::where('id', $request->input('attribute'))->first();

            if(is_null($attribute)){
                abort(404);
            }
        }

        $this->addDataSet(
            'attributes', 
            $attribute,
            []
        ); 

        $this->addDataSet(
            'links', 
            $attribute->values()->get(),
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

        $page = Attribute::where('id', $request->input('attribute'))->first();
        $filter = Filter::where('name', $page->name)->first();

        if(!is_null($filter)){
            $filter->name = $request->input("name");
            $filter->update();
        }
        

        $page->name = $request->input("name");
        $page->description = $request->input("description");
        $page->active = $request->input("active") == "on" ? true:false;
        $page->user_id = $request->user()->id;
        $page->update();

       

        
        $roles = [];
        if($request->has('values')){
            foreach($request->input('values') as $id => $val){
                
               $roles[] = $id;
            }
        }

        if(count($roles) > 0){
            $page->values()->sync($roles);
        }
        

        return  redirect('/admin/attributes/')->with("success", "Attribute " . $request->input("name") . " was saved successfully.");
    }
}