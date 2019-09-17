<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Attribute;
use App\AttributeValue;
use App\User;
use App\Media;
use Illuminate\Support\Facades\Schema;
use App\Product;
use App\Variant;
use DB;

class Inventory extends Model
{
    public function attributeValues(){
        return $this->belongsToMany(AttributeValue::class, 'inventory_attribute_value');
    }

    public function variants(){
        return $this->belongsToMany(Variant::class);
    }


    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public function media(){
        return $this->belongsToMany(Media::class);
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
