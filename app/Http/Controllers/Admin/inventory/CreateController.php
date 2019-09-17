<?php

namespace App\Http\Controllers\Admin\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Inventory;
use App\Media;
use App\AttributeValue;


class CreateController extends Controller
{

    protected $name = "inventory";
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

        
        return view($this->page['view'], $this->page);
    }

    public function save(Request $request){
        
        

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'upc' => 'required',
            'sku' => 'required',
            'msrp' => array('required', 'regex:/^\d*(\.\d{2})?$/'),
            
            'price' => array('required', 'regex:/^\d*(\.\d{2})?$/'),
            'quantity' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

      
       
        $media = new Inventory();
        $media->name = $request->input('name');
        $media->upc = $request->input('upc');
        $media->sku = $request->input('sku');
        $media->msrp = $request->input('msrp');
        $media->price = $request->input('price');
        $media->quantity = $request->input('quantity');
        $media->available_quantity = is_null($request->input('availQuantity')) ? 0:$request->input('availQuantity');
        $media->user_id = $request->user()->id;
        $media->save();
        
        if($request->has('attributes')){
            foreach($request->input("attributes") as $id => $status){
                $media->attributeValues()->attach(AttributeValue::where('id', $id)->first());
            }
        }

        if($request->has('media')){
            foreach($request->input("media") as  $id){
                $media->media()->attach(Media::where('id', $id)->first());
            }
        }

        
      

        return  redirect('/admin/inventory')->with("success", "Inventory " . $request->input("name") . " was successfully created.");
    }
}