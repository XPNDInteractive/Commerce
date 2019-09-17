<?php

namespace App\Http\Controllers\Admin\Media;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Media;
use App\Role;
use Validator;


class UpdateController extends Controller
{

    public function index(Request $request)
    {
        $this->getPage($request);
        
        if($request->has('media'))
        {
            $media = Media::where('id', $request->input('media'))->first();

            if(is_null($media)){
                abort(404);
            }
        }

        $this->addDataSet(
            'media', 
            $media,
            []
        ); 

      
        return view($this->page['view'], $this->page);
    }

    public function save(Request $request){
       
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $page = Media::where('id', $request->input('media'))->first();
        $page->title = $request->input("title");
        $page->alt = $request->input("alt");
        $page->user_id = $request->user()->id;
        $page->update();


        return  redirect('/admin/media')->with("success", "Media " . $request->input("title") . " was updated successfully.");
    }
}