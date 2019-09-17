<?php

namespace App\Http\Controllers\Admin\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Variant;
use App\Media;
use App\AttributeValue;
use App\Category;
use App\Product;
use App\FilterTag;
use App\Reviews;
use App\Role;
use App\Size;

use Illuminate\Support\Facades\Storage;


class CreateController extends Controller
{

    protected $name = "product";
    protected $attributeModel = \App\Attribute::class;
    protected $mediaModel = \App\Media::class;
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
            'attributes', 
            $this->attributeModel::all(),
            $this->attributeModel::getTableColumns()
        ); 

        $this->addDataSet(
            'media', 
            $this->mediaModel::all(),
            []
        ); 

        $this->addDataSet(
            'variants', 
            Variant::all(),
            []
        ); 

        $this->addDataSet(
            'categories', 
            Category::all(),
            []
        ); 

        $this->addDataSet(
            'reviews', 
            Reviews::all(),
            []
        ); 

        $this->addDataSet(
            'sizes', 
            Size::all(),
            []
        ); 



        
        return view($this->page['view'], $this->page);
    }

    public function variant(Request $request)
    {
        $this->getPage($request);
        
        $this->addDataSet(
            'attributes', 
            $this->attributeModel::all(),
            $this->attributeModel::getTableColumns()
        ); 

        $this->addDataSet(
            'media', 
            $this->mediaModel::all(),
            []
        ); 

        $this->addDataSet(
            'variants', 
            Variant::all(),
            []
        ); 

        $this->addDataSet(
            'reviews', 
            Reviews::all(),
            []
        ); 


        $this->addDataSet(
            'categories', 
            Category::all(),
            []
        ); 

        $this->addDataSet(
            'sizes', 
            Size::all(),
            []
        ); 

        
        return view($this->page['view'], $this->page);
    }


    public function save(Request $request){
        
       
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'upc' => 'required',
            'sku' => 'required',
            'price' => array('required', 'regex:/^\d*(\.\d{2})?$/'),
            'quantity' => 'required|numeric',
            'available_quantity' => 'required|numeric',
        ]);
        
      
        
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

       
       
        $product = new Product();
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->description = $request->input('description');
        $product->subtitle = $request->input('subtitle');
        $product->meta_description = $request->input('meta_description');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->price = $request->input('price');
        $product->sku = $request->input('sku');
        $product->upc = $request->input('upc');
        $product->quantity = $request->input('quantity');
        $product->available_quantity = $request->input('available_quantity');
        $product->media_id = $request->input('product-media');
        $product->user_id = $request->user()->id;
        $product->save();

        if($request->has('media')){
            foreach($request->input('media') as $media){
                $product->media()->attach(Media::where('id', $media)->first());
            }

        }


        if($request->has('filtertags')){
            foreach($request->input('filtertags') as $id => $status){
                $product->filterTags()->attach(FilterTag::where('id', $id)->first());
            }

        }

        if($request->has('categories')){
            foreach($request->input('categories') as $id => $status){
                $product->categories()->attach(Category::where('id', $id)->first());
            }
        }  
        
        
        $page = new \App\Page();
        $page->title = $request->input("name");
        $page->slug = $request->input("slug");
        $page->description = $request->input("description");
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "product";
        $page->is_admin = false;
        $page->user_id = $request->user()->id;
        $page->active = true;
        $page->save();
        $page->roles()->attach(Role::all());
           
        

      
        return  redirect('/admin/products')->with("success", "Product " . $request->input("name") . " was successfully created.");
      

        
    }

    public function variantSave(Request $request){
        
       
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);
        
      
        
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

       
       
        $product = new Product();
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->description = $request->input('description');
        $product->subtitle = $request->input('subtitle');
        $product->meta_description = $request->input('meta_description');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->price = "0.00";
     
        $product->media_id = $request->input('product-media');
        $product->user_id = $request->user()->id;
        $product->save();


        if($request->has('filtertags')){
            foreach($request->input('filtertags') as $id => $status){
                $product->filterTags()->attach(FilterTag::where('id', $id)->first());
            }

        }

        if($request->has('categories')){
            foreach($request->input('categories') as $id => $status){
                $product->categories()->attach(Category::where('id', $id)->first());
            }
        }  
        
        if($request->has('variants')){
            foreach($request->input('variants') as $id => $status){
                $product->variants()->attach(Variant::where('id', $id)->first());
            }
        }  
        
        $page = new \App\Page();
        $page->title = $request->input("name");
        $page->slug = $request->input("slug");
        $page->description = $request->input("description");
        $page->keywords = "biill, boo, bom, bip, bol";
        $page->template = "product";
        $page->is_admin = false;
        $page->user_id = $request->user()->id;
        $page->active = true;
        $page->save();
        $page->roles()->attach(Role::all());
           
        

      
        return  redirect('/admin/products')->with("success", "Product " . $request->input("name") . " was successfully created.");
      

        
    }
}