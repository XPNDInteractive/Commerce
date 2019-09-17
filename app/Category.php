<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Collection;
use App\User;
use App\Filter;
use Illuminate\Support\Facades\Schema;
use DB;

class Category extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public function collections(){
        return $this->belongsToMany(Product::class);
    }

    public function filters(){
        return $this->belongsToMany(Filter::class);
    }

    public function parents(){
        return $this->belongsToMany(Category::class, "category_category", "category_id", "parent_id");
    }

    public function children(){
        return $this->belongsToMany(Category::class, "category_category", "parent_id", "category_id");
    }


    public function createdBy(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getUserIdAttribute($value)
    {
        return User::where('id', $value)->first()->name;
    }

    public function getParentIdAttribute($value)
    {
        if(!is_null($value)){
            return Category::where('id', $value)->first()->name;
        }

        return null;
       
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
