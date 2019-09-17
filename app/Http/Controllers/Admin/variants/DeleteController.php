<?php

namespace App\Http\Controllers\Admin\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inventory;
use Validator;


class DeleteController extends Controller
{
    public function delete(Request $request)
    {
        $page = Inventory::where('id', $request->input('inventory'))->first();
        $name = $page->name;
        $page->delete();

        return  redirect('/admin/inventory')->with("success", "Inventory " . $name . " was successfully removed.");
    }
}