<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\FieldType;

class Field extends Model
{
    public function fieldTypes(){
        return $this->belongsTo(FieldType::class, 'type', 'id');
    }
}
