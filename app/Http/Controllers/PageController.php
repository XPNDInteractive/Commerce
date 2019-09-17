<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Menu;
use App\Category;
use App\Product;
use App\FilterTag;
use Illuminate\Support\Facades\Schema;
use App\Blocks\Block as BlocksBlock;
use App\Block;
use App\VariantAttributeValue;

class PageController extends Controller
{

    public function handler(Request $request)
    {
        $this->getPage($request);
        
       

        $this->addDataSet(
            'category', 
            Category::where('slug', rawurldecode($request->path()))->where("active", true)->first()
        ); 

        $this->addDataSet(
            'categories', 
            Category::all()
        ); 


        $product = Product::where('slug', rawurldecode($request->path()))->first();

       
        
        if(!is_null($product)){

            $options = [];
            $default = false; 
          
          
            $count = 0;
            foreach($product->variants()->get() as $variant){

              
                if($product->variants()->min('price') !== $product->variants()->max('price') ){
                    $price = $product->variants()->min('price') .' - $' . $product->variants()->max('price');
                }else{
                    $price = $product->variants()->max('price');
                }
              

                if(isset($options[$variant->attributeValues[0]->value])){
                   
                    if($variant->default){
                        
                        $options[$variant->attributeValues[0]->value]['default'] = $variant->default;
                        $default = true;
                    }
                    
                    $options[$variant->attributeValues[0]->value]['order'] = $count++;
                    $options[$variant->attributeValues[0]->value]['sizes'][$variant->attributeValues[1]->value]  = $variant->price;
                }

                else{
                    $options[$variant->attributeValues[0]->value] = [ 
                        'image' => base64_decode($variant->media_id),
                        'images' => $variant->media()->get(),
                        'sizes' => [
                            $variant->attributeValues[1]->value => $variant->price
                        ],
                        'default' => $variant->default,
                        'quantity' => $variant->available_quantity
                    ];
                }
            }

        //dd($options);
           
            $this->addDataSet(
                'product', 
                $product
            ); 

            $this->addDataSet(
                'price', 
                $price
            ); 

            $this->addDataSet(
                'variants', 
                $product->variants()->get()
            ); 

            $this->addDataSet(
                'options', 
                $options
            ); 

            //dd($options);
            
        }
        


        
        $this->addDataSet(
            'featured_products', 
            Category::where("active", true)->where('name', 'Featured')->first()
        ); 

       
        
        return view($this->page['view'], $this->page);
        
        
    }
}
