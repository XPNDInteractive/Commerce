<?php

namespace App\Http\Controllers\Admin\MenuItems;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use App\MenuItem;
use App\Role;
use Validator;


class DeleteController extends Controller
{
    public function delete(Request $request)
    {
        $page = MenuItem::where('id', $request->input('link'))->first();
        $name = $page->name;
        $page->delete();

        return  redirect('/admin/menu/update?menu='. $request->input('menu'))->with("success", "Menu Link " . $name . " was successfully removed.");
    }
}