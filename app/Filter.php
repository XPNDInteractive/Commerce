<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\FilterTag;
use Illuminate\Support\Facades\Schema;
use DB;

class Filter extends Model
{
    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function tags(){
        return $this->hasOne(FilterTag::class);
    }

    public function getUserIdAttribute($value)
    {
        return User::where('id', $value)->first()->name;
    }
    

    public static function getTableColumns() {
        $page = new self();

        $cols = Schema::getColumnListing($page->getTable());

        $columns = [];
        foreach($cols as $col){
             $columns[] = [
                 'name' => $col,
                 'type' => DB::connection()->getDoctrineColumn($page->getTable(), $col)->getType()->getName(),
             ];
        }

        return $columns;
        
    }
}
