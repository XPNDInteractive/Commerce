<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type');
            $table->string("name");
            $table->string("label")->nullable();
            $table->string("text")->nullable();
            $table->string('class')->nullable();
            $table->string('placeholder')->nullable();
            $table->string("value")->nullable();
            $table->string("rules")->nullable();
            $table->boolean("inline")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fields');
    }
}
