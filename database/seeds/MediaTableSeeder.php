<?php

use Illuminate\Database\Seeder;
use App\Media;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $images = glob(public_path() . "/storage/media" . "/*");
        
        
        foreach($images as $image){

         
           $media = new Media();
           $media->title = pathinfo($image, PATHINFO_FILENAME);
           $media->alt = pathinfo($image, PATHINFO_FILENAME);
           $media->path = base64_encode("/storage/media/" . basename($image));
           $media->type = pathinfo($image, PATHINFO_EXTENSION);
           $media->size = '1000 x 1300'; 
           $media->user_id = 1;
           $media->save();
        }
       

      

    }
}
