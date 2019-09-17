<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;
use App\Role;
use App\User;

class MenuItem extends Model
{
    public function menu(){
        return $this->belongsToMany(Menu::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function createdBy(){
        return $this->belongsTo(User::class);
    }

    
    public function children(){
        return $this->belongsTo(MenuItem::class, 'id', 'parent_id');
    }
}
