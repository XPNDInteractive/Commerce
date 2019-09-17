<?php

namespace App\Http\Controllers\Admin\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Media;
use App\Inventory;
use Validator;


class UpdateController extends Controller
{
    protected $attributeModel = \App\Attribute::class;
    protected $mediaModel = \App\Media::class;

    public function index(Request $request)
    {
        $this->getPage($request);
        
        if($request->has('inventory'))
        {
            $inventory = Inventory::where('id', $request->input('inventory'))->first();

            if(is_null($inventory)){
                abort(404);
            }
        }

        $this->addDataSet(
            'inventory', 
            $inventory,
            []
        ); 

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

        $inv = Inventory::where('id', $request->input('inventory'))->first();
        $inv->name = $request->input('name');
        $inv->upc = $request->input('upc');
        $inv->sku = $request->input('sku');
        $inv->msrp = $request->input('msrp');
        $inv->price = $request->input('price');
        $inv->quantity = $request->input('quantity');
        $inv->available_quantity = is_null($request->input('availQuantity')) ? 0:$request->input('availQuantity');
        $inv->user_id = $request->user()->id;
        $inv->update();

        $attributes = [];
        if($request->has('attributes')){
            foreach($request->input('attributes') as $id => $val){
                
               $attributes[] = $id;
            }
        }

        $inv->attributeValues()->sync($attributes);

        $media = [];
        if($request->has('media')){
            foreach($request->input('media') as $id => $val){
                
               $media[] = $id;
            }
        }

        $inv->media()->sync($media);


        return  redirect('/admin/inventory')->with("success", "Inventory " . $request->input("name") . " was updated successfully.");
    }
}