<?php

namespace App;
use Illuminate\Support\Facades\Schema;
use DB;

use Illuminate\Database\Eloquent\Model;
use App\Page;

class Block extends Model
{
    public function pages()
    {
        return $this->belongsToMany(Page::class);
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
