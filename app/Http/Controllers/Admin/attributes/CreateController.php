<?php

namespace App\Http\Controllers\Admin\Attributes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attribute;
use App\Role;
use App\Filter;
use Validator;


class CreateController extends Controller
{

    protected $name = "attributes";
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

        $page = new Attribute();
        $page->name = $request->input("name");
        $page->description = $request->input("description");
        $page->active = $request->input("active") == "on" ? true:false;
        $page->user_id = $request->user()->id;
        $page->save();

        $page = new Filter();
        $page->name = $request->input("name");
        $page->description = $request->input("description");
        $page->active = $request->input("active") == "on" ? true:false;
        $page->user_id = $request->user()->id;
        $page->save();


        return  redirect('/admin/attributes/update?attribute=' . Attribute::where('name', $request->input("name"))->first()->id)->with("success", "Attribute " . $request->input("name") . " was successfully added.");
    }
}