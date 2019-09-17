<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Collection;
use App\Category;
use App\Attribute;
use App\AttributeValue;
use App\User;
use App\Media;
use App\FilterTag;
use App\Variant;
use App\Inventory;
use App\Reviews;
use Illuminate\Support\Facades\Schema;
use DB;

class Product extends Model
{
    public function collections(){
        return $this->belongsToMany(Category::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function reviews(){
        return $this->belongsToMany(Reviews::class, 'product_review', 'product_id','review_id');
    }

    public function attributeValues(){
        return $this->belongsToMany(AttributeValue::class, 'product_attribute_values');
    }

    public function inventory(){
        return $this->belongsToMany(Inventory::class);
    }

    public function variants(){
        return $this->belongsToMany(Variant::class);
    }

    public function media(){
        return $this->belongsToMany(Media::class);
    }

    public function filterTags(){
        return $this->belongsToMany(FilterTag::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function createdBy(){
        return $this->belongsTo(User::class);
    }

    public function getProducts($request){
        
        $query = DB::table('products')
            ->join('filter_tag_product', 'products.id', 'filter_tag_product.product_id')
            ->join('filter_tags', 'filter_tag_product.filter_tag_id', 'filter_tag.id')->get();

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

    public function getColors(){
        dd($this
            ->leftjoin('product_variant', 'products.id', 'product_variant.product_id')
            ->leftjoin('variants', 'product_variant.variant_id', 'variants.id')
            ->leftjoin('variant_attribute_value', 'variants.id', 'variant_attribute_value.variant_id')
            ->leftjoin('attribute_values', 'variant_attribute_value.attribute_value_id', 'attribute_values.id')
            ->leftjoin('attributes', 'variants.id', 'attribute_values.attribute_id')->where('attributes.name', 'Colors')->get());
    }
}
