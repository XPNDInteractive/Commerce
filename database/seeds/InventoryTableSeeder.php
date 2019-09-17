<?php

use Illuminate\Database\Seeder;
use App\Inventory;
use App\Media;
use App\AttributeValue;
use App\User;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('id', 1)->first();
        $attr = AttributeValue::where("value", "medium")->first();
        $attr2 = AttributeValue::where("value", "black")->first();

        $attr3 = AttributeValue::where("value", "mesh")->first();

       

        $media = new Media();
        $media->title = "mens tee shirt product image";
        $media->path = base64_encode('https://c.static-nike.com/a/images/f_auto,b_rgb:f5f5f5,w_440/e1ydg4x5gh3o8yzeg8ld/sportswear-windrunner-mens-hooded-jacket-rTqNLT.jpg');
        $media->type = ".jpg";
        $media->size = "440x550";
       
        $media->user_id = $user->id;
        $media->save();


        
        $inv = new Inventory();
        $inv->name = "Men's Black Polo Large";
        $inv->msrp = 10.99;
        $inv->price = 25.00;
        $inv->sku = "AC2626";
        $inv->upc = "UPC2432";
        $inv->quantity = 200;
        $inv->available_quantity = 100;
        $inv->user_id = $user->id;
        $inv->save();

        $inv->attributeValues()->attach($attr);
        $inv->attributeValues()->attach($attr2);

        foreach( Media::all() as $media){
            $inv->media()->attach($media);
        }

        $inv = new Inventory();
        $inv->name = "Men's Black Polo Large";
        $inv->msrp = 10.99;
        $inv->price = 25.00;
        $inv->sku = "AC2626";
        $inv->upc = "UPC2432";
        $inv->quantity = 200;
        $inv->available_quantity = 100;
        $inv->user_id = $user->id;
        $inv->save();

        $inv->attributeValues()->attach($attr);
        $inv->attributeValues()->attach($attr2);
        $inv->attributeValues()->attach($attr3);

        foreach( Media::all() as $media){
            $inv->media()->attach($media);
        }
    }
}
