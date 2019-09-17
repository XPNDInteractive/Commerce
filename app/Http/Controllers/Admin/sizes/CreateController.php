<?php

namespace App\Http\Controllers\Admin\Sizes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;
use App\Size;
use App\SizeColumn;
use App\SizeRow;
use Validator;


class CreateController extends Controller
{

    protected $name = "sizes";
    protected $model = \App\Size::class;
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

        

        return view($this->page['view'], $this->page);
    }

    public function save(Request $request){

        
      
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'col' => 'required|array',
            'col.*' => 'required|distinct|string',
            'row' => 'required|array',
            
            
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $size = new Size();
        $size->name = $request->input("name");
        $size->active = $request->input("active") == "on" ? true:false;
        $size->save();

        if($request->has('products')){
            foreach($request->input("products") as $id => $status){
                $size->products()->attach(Product::where('id', $id)->first());
            }
        }

        foreach($request->input('col') as $key => $value){
            $sizeCol = new SizeColumn();
            $sizeCol->size_id = $size->id;
            $sizeCol->name = $value;
            $sizeCol->save();
        }

        foreach($request->input('row') as $key => $value){
            if(is_array($value)){
                foreach($value as $k => $v){
                    $sizeRow = new SizeRow();
                    $sizeRow->size_id = $size->id;
                    $sizeRow->size_column_id = SizeColumn::where('name', $request->input('col')[$k])
                                                            ->where('size_id', $size->id)->first()->id;
                    $sizeRow->size_row_id = $key;
                    $sizeRow->value = $v;
                    $sizeRow->save();
                }
            }
        }
       

      



        return  redirect('/admin/reviews')->with("success", "Review from " . $request->input("name") . " was successfully added.");
    }
}