<?php

use Illuminate\Database\Seeder;
use App\Filter;
use App\FilterTag;
use App\Attribute;
use App\AttributeValue;

class FilterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  



        $filter = new Filter();
        $filter->name = "Activity";
        $filter->description = "Category filter for product colors";
        $filter->active = true;
        $filter->user_id = 1;
        $filter->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Activity')->first()->id;
        $page->name = 'Training';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Activity')->first()->id;
        $page->name = 'Running';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Activity')->first()->id;
        $page->name = 'Fishing';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Activity')->first()->id;
        $page->name = 'Gardening';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Activity')->first()->id;
        $page->name = 'Hiking';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Activity')->first()->id;
        $page->name = 'Racing';
        $page->save();
        
        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Activity')->first()->id;
        $page->name = 'Workwear';
        $page->save();
      
        $filter = new Filter();
        $filter->name = "Colors";
        $filter->description = "Category filter for product colors";
        $filter->active = true;
        $filter->user_id = 1;
        $filter->save();

        $page = new Attribute();
        $page->name = "Colors";
        $page->description = "Attribute for product colors";
        $page->active = true;
        $page->user_id = 1;
        $page->save();


        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Colors')->first()->id;
        $page->value = 'Black';
        $page->hex = '#000';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Colors')->first()->id;
        $page->name = 'Black';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Colors')->first()->id;
        $page->value = 'Arctic White';
        $page->hex = 'white';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Colors')->first()->id;
        $page->name = 'White';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Colors')->first()->id;
        $page->value = 'Storm Gray';
        $page->hex = '#878c93';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Colors')->first()->id;
        $page->name = 'gray';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Colors')->first()->id;
        $page->value = 'Polar Blue';
        $page->hex = '#2781c2';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Colors')->first()->id;
        $page->name = 'polar-blue';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Colors')->first()->id;
        $page->value = 'Midnight Blue';
        $page->hex = '#1b3c68';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Colors')->first()->id;
        $page->name = 'midnight-blue';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Colors')->first()->id;
        $page->value = 'Gray Twist';
        $page->hex = '#74787d';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Colors')->first()->id;
        $page->name = 'gray-twist';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Colors')->first()->id;
        $page->value = 'Baja Red';
        $page->hex = '#f94845';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Colors')->first()->id;
        $page->name = 'baja-red';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Colors')->first()->id;
        $page->value = 'Charged Coral Twist';
        $page->hex = '#f94845';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Colors')->first()->id;
        $page->name = 'charged-coral-twist';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Colors')->first()->id;
        $page->value = 'Teal Teal Punch Twist';
        $page->hex = '#24a2a8';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Colors')->first()->id;
        $page->name = 'teal-teal-punch-twist';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Colors')->first()->id;
        $page->value = 'Cabana Green';
        $page->hex = '#009a71';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Colors')->first()->id;
        $page->name = 'cabana-green';
        $page->save();


        $filter = new Filter();
        $filter->name = "Sizes";
        $filter->description = "Category filter for product sizes";
        $filter->active = true;
        $filter->user_id = 1;
        $filter->save();

        $page = new Attribute();
        $page->name = "Sizes";
        $page->description = "Attribute for product sizes";
        $page->active = true;
        $page->user_id = 1;
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Sizes')->first()->id;
        $page->value = 'XS';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Sizes')->first()->id;
        $page->name = 'XS';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Sizes')->first()->id;
        $page->value = 'S';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Sizes')->first()->id;
        $page->name = 'S';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Sizes')->first()->id;
        $page->value = 'M';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Sizes')->first()->id;
        $page->name = 'M';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Sizes')->first()->id;
        $page->value = 'L';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Sizes')->first()->id;
        $page->name = 'L';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Sizes')->first()->id;
        $page->value = 'XL';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Sizes')->first()->id;
        $page->name = 'XL';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Sizes')->first()->id;
        $page->value = 'XXL';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Sizes')->first()->id;
        $page->name = 'XXL';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Sizes')->first()->id;
        $page->value = 'XXXL';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Sizes')->first()->id;
        $page->name = 'XXXL';
        $page->save();

        $page = new AttributeValue();
        $page->attribute_id = Attribute::where('name', 'Sizes')->first()->id;
        $page->value = 'XXXXL';
        $page->save();

        $page = new FilterTag();
        $page->filter_id = Filter::where('name', 'Sizes')->first()->id;
        $page->name = 'XXXXL';
        $page->save();


 
    }
}
