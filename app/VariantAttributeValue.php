<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Variant;
use App\AttributeValue;
use App\VariantAttributeValue;

class VariantAttributeValue extends Model
{
    public function variants(){
        return $this->belongsToMany(Variant::class);
    }

    public function attributesValues(){
        return $this->belongsToMany(AttributeValue::class);
    }
}
