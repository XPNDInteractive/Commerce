<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\AttributeValue;
use App\User;
use App\Variant;
use App\Inventory;
use Illuminate\Support\Facades\Schema;
use DB;

class Attribute extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public function values(){
        return $this->hasOne(AttributeValue::class);
    }

    public function inventory(){
        return $this->belongsToMany(Inventory::class);
    }

    public function variants(){
        return $this->belongsToMany(Variant::class);
    }


    public function createdBy(){
        return $this->belongsTo(User::class);
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
