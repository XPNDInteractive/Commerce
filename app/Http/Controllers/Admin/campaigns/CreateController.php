<?php

namespace App\Http\Controllers\Admin\Campaigns;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CreateController extends Controller
{

    protected $name = "campaigns";
    protected $model = \App\Campaign::class;
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