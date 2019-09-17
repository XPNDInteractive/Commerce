<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Size;
use App\SizeRow;

class SizeColumn extends Model
{
    public function sizes()
    {
        return $this->belongsTo(Sizes::class);
    }

    public function rows()
    {
        return $this->hasMany(SizeRow::class);
    }
}
