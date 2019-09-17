<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\User;
use App\Page;
use App\Role;
use App\Category;
use App\Media;
use App\Attribute;
use App\AttributeValue;
use App\Filter;
use App\FilterTag;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        

        $product = new Product();
        $product->name = "Men's Crew Neck Shirt";
        $product->slug = addslashes(strtolower("Mens Crew Neck Shirt"));
        $product->description = base64_encode("Arctic Cool’s Instant Cooling Men’s Crew Neck Shirt is a must for athletes, weekend warriors, and anyone who wants to keep cool and
        comfortable. It features state-of-the-art HydroFreeze X Technology, a cooling management system that reduces the fabric temperature to cool
        you down when you need it the most! The shirt’s design also includes ActiveWick, our moisture wicking technology that pulls sweat away from
        skin and disperses it throughout the shirt, keeping you dry and cool. It’s made with fabric that includes 4-way stretch, providing a full range of
        motion for any activity. The Instant Cooling Men’s Crew Neck Shirt is antimicrobial/anti-odor powering your shirt to smell fresh and clean after
        every wash! Lastly, we added on sun protection with UPF 50+ to keep you protected by blocking 98% of the sun’s rays! This Crew Neck shirt
        makes it easy to stay cool when you need it the most.");
        $product->subtitle = "Instant Cooling - HydroFreeze X";
        $product->price = "29.99";
        $product->sku = "AC2000";
        $product->quantity = 30;
        $product->available_quantity = 30;
        $product->user_id = 1;
        $product->active = true;
        $product->save();

        $product->categories()->attach(Category::where('name', "Men's")->first());
        $product->categories()->attach(Category::where('name', "Featured")->first());
        $product->categories()->attach(Category::where('name', "New Arrivals")->first());
        $product->categories()->attach(Category::where('name', "Top Sellers")->first());
        $product->categories()->attach(Category::where('name', "Popular")->first());

       
        $page = new Page();
        $page->title = $product->name;
        $page->slug = $product->slug;
        $page->description = $product->description;
        $page->keywords = "Instant Cooling - HydroFreeze X";
        $page->template = "product";
        $page->user_id = 1;
        $page->active = true;
        $page->save();

        $page->roles()->attach(Role::all());

    }
}
