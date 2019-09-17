<?php

namespace App\Http\Controllers\Admin\Variants;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Media;
use App\Variant;
use App\Product;
use App\Category;
use App\Attribute;
use App\AttributeValue;
use Validator;


class UpdateController extends Controller
{
    protected $attributeModel = \App\Attribute::class;
    protected $mediaModel = \App\Media::class;
   
    public function index(Request $request)
    {
        $this->getPage($request);
        
        if($request->has('variant'))
        {
            $inventory = Variant::where('id', $request->input('variant'))->first();

            if(is_null($inventory)){
                abort(404);
            }
        }

        $this->addDataSet(
            'variant', 
            $inventory,
            []
        ); 

        $this->addDataSet(
            'attributes', 
            Attribute::all(),
            []
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

        //dd($request->all());
       
        $validator = Validator::make($request->all(), [
            'price' => array('regex:/^\d*(\.\d{2})?$/', 'nullable'),
            'sku' => 'required',
            'upc' => 'required',
            'quantity' => 'required|numeric',
            'available_quantity' => 'required|numeric',
            'product-media' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $product = Variant::where('id', $request->input('variant'))->first();
        $product->price = $request->input('price');
        $product->sku = $request->input('sku');
        $product->upc = $request->input('upc');
        $product->quantity = $request->input('quantity');
        $product->available_quantity = $request->input('available_quantity');
        $product->media_id = $request->input('product-media');
        $product->default = $request->input('default') == 'on' ? true:false;
        $product->update();

        $av = [];
        foreach(Attribute::all() as $attribute){
            if($request->has($attribute->name)){
               $av[] = AttributeValue::where("id", $request->input($attribute->name))->first()->id;
            }
        }


   
       
        $product->attributeValues()->sync($av);
      

    
        
       
        $media = [];

        
        if($request->has('media')){
            foreach($request->input('media') as $vm){
                if(!is_null($vm)){
                    $media[] = Media::where('id', $vm)->first()->id;
                }
            }

           
            $product->media()->sync($media);

        }

        if($request->has('products')){
            foreach($request->input('products') as $id => $selected){
                $product->products()->sync(Product::where('id', $id)->first());
            }

        }


        return  redirect('/admin/variants')->with("success", "Variant " . $request->input("sku") . " was updated successfully.");
    }
}