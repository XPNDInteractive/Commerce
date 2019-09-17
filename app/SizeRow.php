<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SizeColumn;
use App\Size;
class SizeRow extends Model
{
    public function sizes()
    {
        return $this->belongsTo(Sizes::class);
    }

    public function columns()
    {
        return $this->belongsTo(SizeColumn::class);
    }
}
