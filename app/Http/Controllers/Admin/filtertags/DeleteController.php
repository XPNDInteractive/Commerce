<?php

namespace App\Http\Controllers\Admin\FilterTags;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use App\FilterTag;
use App\Role;
use Validator;


class DeleteController extends Controller
{
    public function delete(Request $request)
    {
        $page = FilterTag::where('id', $request->input('tag'))->first();
        $name = $page->name;
        $page->delete();

        return  redirect('/admin/filters/update?filter='. $request->input('filter'))->with("success", "Filter Tag " . $name . " was successfully removed.");
    }
}