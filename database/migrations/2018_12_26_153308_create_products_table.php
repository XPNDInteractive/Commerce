<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("slug");
            $table->binary("description")->nullable();
            $table->binary('subtitle')->nullable();
            $table->binary("meta_description")->nullable();
            $table->binary('meta_keywords')->nullable();
            $table->string("price")->default("0.00");
            $table->string("sku")->nullable();
            $table->string("upc")->nullable();
            $table->string("available_quantity")->default(0);
            $table->integer("quantity")->default(0);
            $table->integer("media_id")->nullable();
            $table->integer("rating")->default(0);
            $table->integer("user_id");
            $table->boolean("active")->default(false);
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
        Schema::dropIfExists('products');
    }
}
