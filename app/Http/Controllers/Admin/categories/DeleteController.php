<?php

namespace App\Http\Controllers\Admin\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Filter;
use App\Role;
use Validator;


class DeleteController extends Controller
{
    public function delete(Request $request)
    {
        $page = Filter::where('id', $request->input('filter'))->first();
        $name = $page->name;
        $page->delete();

        return  redirect('/admin/filters')->with("success", "Filter " . $name . " was successfully removed.");
    }
}