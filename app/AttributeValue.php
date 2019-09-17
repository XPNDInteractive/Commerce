<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Attribute;
use App\Media;
use App\Inventory;
use App\Variant;

class AttributeValue extends Model
{
    public function inventory(){
        return $this->belongsToMany(Inventory::class, 'inventory_attribute_value');
    }

    public function attributes(){
        return $this->belongsTo(Attribute::class, 'attribute_id', 'id');
    }

    public function variants(){
        return $this->belongsToMany(Variant::class, 'variant_attribute_values');
    }

    public function media(){
        return $this->belongsToMany(Media::class);
    }
}
