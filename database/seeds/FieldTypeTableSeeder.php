<?php

use Illuminate\Database\Seeder;
use App\FieldType;

class FieldTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ft = new FieldType();
        $ft->name = "text";
        $ft->save();

        $ft = new FieldType();
        $ft->name = "hidden";
        $ft->save();

        $ft = new FieldType();
        $ft->name = "checkbox";
        $ft->save();

        $ft = new FieldType();
        $ft->name = "radio";
        $ft->save();

        $ft = new FieldType();
        $ft->name = "textarea";
        $ft->save();
    }
}
