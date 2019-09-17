<?php

namespace App\Http\Controllers\Admin\AttributeValues;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use App\AttributeValue;
use App\Role;
use Validator;


class DeleteController extends Controller
{
    public function delete(Request $request)
    {
        $page = AttributeValue::where('id', $request->input('value'))->first();
        $name = $page->name;
        $page->delete();

        return  redirect('/admin/attributes/update?attribute='. $request->input('attribute'))->with("success", "Attribute Value " . $name . " was successfully removed.");
    }
}