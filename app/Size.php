<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\SizeColumn;
use App\SizeRow;

class Size extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function columns()
    {
        return $this->hasMany(SizeColumn::class);
    }

    public function rows()
    {
        return $this->hasMany(SizeRow::class);
    }
    
}
