<?php

namespace App\Http\Controllers\Admin\Roles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CreateController extends Controller
{

    protected $name = "roles";
    protected $model = \App\Role::class;
    protected $searchColumns = [
        'title',
        'slug',
        'description',
        'keywords'
    ];

    public function index(Request $request)
    {
        $this->getPage($request);
        

        
        return view($this->page['view'], $this->page);
    }
}