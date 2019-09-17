<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;
use App\AttributeValue;
use App\Variant;
use App\Inventory;

class Media extends Model
{
    public function createdBy(){
        return $this->belongsTo(User::class);
    }

    public function attributeValues(){
        return $this->belongsToMany(AttributeValue::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public function inventory(){
        return $this->belongsToMany(Inventory::class);
    }

    public function variants(){
        return $this->belongsToMany(Variant::class);
    }

}
