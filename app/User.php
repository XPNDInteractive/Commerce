<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\Product;
use App\Page;
use App\MenuItem;
use App\Menu;
use App\Media;
use App\Collection;
use App\Category;
use Illuminate\Support\Facades\Schema;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function createdRoles(){
        return $this->hasMany(Page::class);
    }

    public function createdProducts(){
        return $this->hasMany(Product::class);
    }

    public function createdMenu(){
        return $this->hasMany(Menu::class);
    }

    public function createdMenuItem(){
        return $this->hasMany(Menu::class);
    }

    public function createdMedia(){
        return $this->hasMany(Menu::class);
    }

    public function createdCollections(){
        return $this->hasMany(Menu::class);
    }

    public function createdCategories(){
        return $this->hasMany(Menu::class);
    }

    public function createdttributes(){
        return $this->hasMany(Menu::class);
    }

    public function createdPages(){
        return $this->hasMany(Page::class);
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
