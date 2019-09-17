<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class, 'product_review', 'review_id');
    }

    public function getUserIdAttribute($value)
    {
        return User::where('id', $value)->first()->name;
    }
}
