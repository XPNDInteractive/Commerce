<?php

namespace App\Http\Controllers\Admin\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Page;
use App\Role;
use App\Block;


class CreateController extends Controller
{

    protected $name = "pages";
    protected $roleModel = \App\Role::class;
    protected $blockModel = \App\Block::class;
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
            'roles', 
            $this->roleModel::all(),
            $this->roleModel::getTableColumns()
        ); 

        $this->addDataSet(
            'blocks', 
            $this->blockModel::all(),
            $this->blockModel::getTableColumns()
        ); 

        $this->page['templates'] = $this->getSiteTemplates(resource_path() . '/views/');

        return view($this->page['view'], $this->page);
    }

    public function save(Request $request){
     
       
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255|unique:pages,title',
            'slug' => 'required|unique:pages,slug',
            'template' => 'required',
            'content' => 'required'
            
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $page = new Page();
        $page->title = $request->input("title");
        $page->slug = $request->input("slug");
        $page->content = $request->input("content");
        $page->description = $request->input("description");
        $page->keywords = $request->input("keywords");
        $page->template = $request->input("template");
        $page->is_front_page = $request->input("frontpage") == "on" ? true:false;
        $page->is_admin = $request->input("admin") == "on" ? true:false;
        $page->active = $request->input("active") == "on" ? true:false;
        $page->user_id = $request->user()->id;
        $page->save();

        if($request->has('roles')){
            foreach($request->input('roles') as $id => $val){
                
                $page->roles()->attach(Role::where('id', $id)->first());
            }
        }

        
        if($request->has('blocks')){
            foreach($request->input('blocks') as $id => $val){
                $page->blocks()->attach(Block::where('id', $id)->first());
            }
        }

        return  redirect('/admin/pages')->with("message", "success");
    }

    private function getSiteTemplates($dir, $results = array()){
        $files = scandir($dir);
    
        foreach($files as $key => $value){
            $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
            if(!is_dir($path)) {
                if(basename(dirname($path)) != "site" && basename(dirname($path)) != "admin"){
                    $results[] = basename(dirname($path)) . '/' . str_replace(".blade.php", "", basename($path));
                }

                else{
                    $results[] = str_replace(".blade.php", "", basename($path)) ;
                }
               
            } else if($value != "." && $value != "..") {
                $results = $this->getSiteTemplates($path, $results);
            }
        }
        
        return $results;
    }
}