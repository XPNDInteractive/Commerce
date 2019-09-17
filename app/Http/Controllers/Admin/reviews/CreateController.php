<?php

namespace App\Http\Controllers\Admin\Reviews;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use App\Reviews;
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
            'products', 
            Product::all(),
            []
        ); 

        $this->addDataSet(
            'users', 
            User::all(),
            []
        ); 

        return view($this->page['view'], $this->page);
    }

    public function save(Request $request){

        
       
        $validator = Validator::make($request->all(), [
            'user' => 'required|numeric',    
            'title' => 'required|max:255|min:3',
            'message' => 'required|max:255|min:3',
            'rating'  => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $page = new Reviews();
        $page->user_id = $request->input("user");
        $page->title = $request->input("title");
        $page->message = $request->input("message");
        $page->rating = $request->input("rating");
        $page->active = $request->input("active") == "on" ? true:false;
        $page->save();

        if($request->has('products')){
            foreach($request->input("products") as $id => $status){
                $page->products()->attach(Product::where('id', $id)->first());
            }
        }

      



        return  redirect('/admin/reviews')->with("success", "Review from " . $request->input("name") . " was successfully added.");
    }
}