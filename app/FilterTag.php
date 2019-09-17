<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filter;
use App\Product;
use Illuminate\Support\Facades\DB;

class FilterTag extends Model
{
    public function filters(){
        return $this->belongsTo(Filter::class, 'filter_id', 'id');
    }

    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public function variants(){
        return $this->belongsToMany(Variant::class);
    }


    public static function filterProducts($input){
        DB::enableQueryLog();
       
        $qry = static::query();
        
        foreach($input as $filterTag => $active){
            $ft = static::where("name",  $filterTag)->first();

            if(!is_null($ft)){
                $qry->where("name", $filterTag);
            }
        }
       
        $fts = $qry->first();

        if(!is_null($fts)){
            return $fts->products()->get();
        }

        else{
            return null;
        }
       
       
    }
}

