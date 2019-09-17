<?php

namespace App\Http\Controllers\Admin\Media;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Role;
use App\Media;
use Validator;
use Illuminate\Support\Facades\Storage;


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
        
        $this->getPage($request);
        
        $this->addDataSet(
            'links', 
            $this->model::all(),
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
        
      
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'media' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        Storage::disk("uploads")->putFileAs('media', $request->file('media'), $request->media->getClientOriginalName());
        $size = getimagesize(public_path() . "/storage/media/" . $request->media->getClientOriginalName());
        $media = new Media();
        $media->title = $request->input('title');
        $media->alt = $request->input('alt');
        $media->path = base64_encode("/storage/media/" . $request->media->getClientOriginalName());
        $media->type = $request->media->getClientOriginalExtension();
        $media->size = $size[1] . 'x' . $size[0]; 
        $media->user_id = $request->user()->id;
       
        $media->save();

        
      

        return  redirect('/admin/media')->with("success", "Media " . $request->input("title") . " was successfully uploaded.");
    }
}