<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;
use App\MenuItem;
use App\Page;
use App\User;
use Illuminate\Support\Facades\Schema;
use DB;

class Role extends Model
{
    public function menus(){
        return $this->belongsToMany(Menu::class);
    }

    public function menuItems(){
        return $this->belongsToMany(MenuItem::class);
    }

    public function pages(){
        return $this->belongsToMany(Page::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
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
