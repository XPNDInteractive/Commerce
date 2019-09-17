<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Page;
use App\Menu;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   
    protected $page;

    public function getPage(Request $request)
    {
        
        $page = Page::where('slug', rawurldecode($request->path()))->where("active", true)->first();

        if(is_null($page)){
            abort(404);
        }

        

        $this->page = [];
        $this->page['id'] = $page->id;
        $this->page['title']  = $page->title;
        $this->page['slug']         = $page->slug;
        $this->page['description']   = $page->description;
        $this->page['keywords']      = $page->keywords;
        $this->page['content']      = $page->content;
        $this->page['template']      = $page->template;
        $this->page['is_front_page'] = $page->frontpage;
        $this->page['is_admin']    = $page->is_admin;
        $this->page['active']      = $page->active;
        $this->page['menu']        = Menu::class;
        $this->page['request']     = $request;
        $this->page['user']        = $request->user();
        $this->page['user_roles']  = !is_null($request->user()) ? $request->user()->roles()->get():null;
        $this->page['url']         = url('/') .'/'. $request->path();
        $this->page['permissions'] = $page->roles()->get();
        $this->page['view']        = $page->is_admin ? 'admin/' . $page->template: 'site/' . $page->template; 
        $this->page['blocks']    = [];
        $this->page['datasets']  = [];
       
        $this->page['full_url'] = $request->fullUrl();
        $this->checkPermissions();
        $this->getBlocks($page);

       
    }

    public function addDataSet($name, $rows, $columns = null){
        $this->page['datasets'][$name] = [];
        $this->page['datasets'][$name]['columns'] = $columns;
        $this->page['datasets'][$name]['rows'] = $rows;
    }

    private function getBlocks($page){
        $blocks = $page->blocks()->where('active', true)->get();

        foreach($blocks as $block){
            $this->page['blocks'][$block->name] = [
                'active' => $block->active == true ? true:false,
                'view' => $block->view,
            ];
        }
    }

    private function  checkPermissions(){
        if(is_null($this->page['user'])){
            foreach($this->page['permissions'] as $permission){
                if($permission->name == "guest"){
                    $this->page["access_granted"] = true;
                }
            }

            if(!isset($this->page['access_granted']) || $this->page['access_granted'] == false){
                abort(401);
            }
        }

        else{
            foreach($this->page['user_roles'] as $userRole){
                if(!is_null($this->page['permissions']->where("name", $userRole->name)->first())){
                    $this->page['access_granted'] = true;
                }
            }
        }
    }
}
