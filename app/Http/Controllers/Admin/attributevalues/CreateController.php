<?php

namespace App\Http\Controllers\Admin\AttributeValues;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attribute;
use App\AttributeValue;
use App\FilterTag;
use App\Filter;
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
        $menu = Attribute::where("id", $request->input('attribute'))->first();
        
        if(is_null($menu)){
            abort(500);
        }



        $this->getPage($request);
        
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
       //dd($request->all());
        $validator = Validator::make($request->all(), [
            'value' => 'required|max:255',
            'attribute' => 'required'
           
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $attr = Attribute::where('id', $request->input('attribute'))->first();

        $page = new AttributeValue();
        $page->attribute_id = $attr->id;
        $page->value = $request->input("value");
        $page->hex = $request->input("hex");
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', $attr->name)->first()->id;
        $page->name = $request->input("value");
      
        $page->save();

        return  redirect('/admin/attributes/update?attribute='. $request->input('attribute'))->with("success", "Attribute Value " . $request->input("value") . " was successfully added.");
    }
}