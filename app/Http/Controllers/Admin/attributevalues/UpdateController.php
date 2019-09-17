<?php

namespace App\Http\Controllers\Admin\AttributeValues;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attribute;
use App\AttributeValue;
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
        
        $menu = Attribute::where("id", $request->input('attribute'))->first();

        
        if(is_null($menu)){
            abort(500);
        }

        $this->addDataSet(
            'link', 
            AttributeValue::where('id', $request->input('value'))->first(),
            []
        ); 

       
        
        $this->addDataSet(
            'links', 
            $menu->values()->get(),
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
            'id' => 'required',
            'attribute' => 'required',
            'value' => 'required|max:255'
          
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

      
        $page = AttributeValue::where('id', $request->input('id'))->first();
        
        $page->value = $request->input("value");
        $page->hex = $request->input("hex");
        $page->update();

        return  redirect('/admin/attributes/update?attribute='. $request->input('attribute'))->with("success", "Attribute Value " . $request->input("value") . " was successfully updated.");
    }
}