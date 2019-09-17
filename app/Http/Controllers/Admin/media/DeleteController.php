<?php

namespace App\Http\Controllers\Admin\Media;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Media;
use Validator;


class DeleteController extends Controller
{
    public function delete(Request $request)
    {
        $page = Media::where('id', $request->input('media'))->first();
        $name = $page->name;
        $page->delete();

        return  redirect('/admin/media')->with("success", "Media " . $name . " was successfully removed.");
    }
}