<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Inventory;
use App\Attribute;
use App\AttributeValue;
use App\Media;
use App\Variant;
use App\filterTag;
use Illuminate\Support\Facades\Schema;
use DB;

class Variant extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public function inventory(){
        return $this->belongsToMany(inventory::class);
    }

    public function attributes(){
        return $this->belongsToMany(Attribute::class);
    }

    public function attributeValues(){
        return $this->belongsToMany(AttributeValue::class, 'variant_attribute_values')->withPivot('attribute_value_id', 'id');
    }

    public function media(){
        return $this->belongsToMany(Media::class, 'variant_media');
    }

    public function filterTags(){
        return $this->belongsToMany(FilterTag::class);
    }

    public function createdBy(){
        return $this->belongsTo(User::class);
    }


    public function getUserIdAttribute($value)
    {
        return User::where('id', $value)->first()->name;
    }

    public function getMediaIdAttribute($value)
    {
        return Media::where('id', $value)->first()->path;
    }

    public function withAttributes(){
        
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
