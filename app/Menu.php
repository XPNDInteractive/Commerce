<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MenuItem;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Schema;
use DB;

class Menu extends Model
{
    public function menuItems(){
        return $this->belongsToMany(MenuItem::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function createdBy(){
        return $this->belongsTo(User::class);
    }

    public function getUserIdAttribute($value)
    {
        return User::where('id', $value)->first()->name;
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
