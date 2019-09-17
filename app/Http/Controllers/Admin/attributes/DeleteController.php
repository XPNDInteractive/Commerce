<?php

namespace App\Http\Controllers\Admin\Attributes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Attribute;
use App\Role;
use Validator;


class DeleteController extends Controller
{
    public function delete(Request $request)
    {
        $page = Attribute::where('id', $request->input('attribute'))->first();
        $name = $page->name;
        $page->delete();

        return  redirect('/admin/attributes')->with("success", "Attribute " . $name . " was successfully removed.");
    }
}