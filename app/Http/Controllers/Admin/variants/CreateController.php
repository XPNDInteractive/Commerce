<?php

namespace App\Http\Controllers\Admin\Variants;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Inventory;
use App\Media;
use App\AttributeValue;
use App\Attribute;
use App\Category;
use App\Product;
use App\Variant;
use App\VariantAttributeValue;
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
            'products', 
            Product::all(),
            []
        ); 

        $this->addDataSet(
            'categories', 
            Category::all(),
            []
        ); 

        
        return view($this->page['view'], $this->page);
    }

   
    public function save(Request $request){
       
        $rules = [
            'price' => array('regex:/^\d*(\.\d{2})?$/', 'nullable'),
            'sku' => 'required',
            'upc' => 'required',
            'quantity' => 'required|numeric',
            'available_quantity' => 'required|numeric',
            'product-media' => 'required|numeric'
            
        ];


        foreach(Attribute::all() as $attr)
        {
            $rules[$attr->name] = 'required|numeric';
        }
       
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }

       
       
        $product = new Variant();
        $product->price = $request->input('price');
        $product->sku = $request->input('sku');
        $product->upc = $request->input('upc');
        $product->quantity = $request->input('quantity');
        $product->available_quantity = $request->input('available_quantity');
        $product->media_id = $request->input('product-media');
        $product->default = $request->input('default') == 'on' ? true:false;
        $product->save();

        foreach(Attribute::all() as $attribute){
            if($request->has($attribute->name)){
                $vav = new VariantAttributeValue();
                $vav->variant_id = $product->id;
                $vav->attribute_value_id = AttributeValue::where('id', $request->input($attribute->name))->first()->id;
                $vav->save();
            }
        }
      

    
        
       
     
        if($request->has('media')){
            foreach($request->input('media') as $media){
                $product->media()->attach(Media::where('id', $media)->first());
            }

        }

        if($request->has('products')){
            foreach($request->input('products') as $id => $selected){
                $product->products()->attach(Product::where('id', $id)->first());
            }

        }


       
        return  redirect('/admin/variants')->with("success", "Variant " . $request->input("name") . " was successfully added.");
    }
}