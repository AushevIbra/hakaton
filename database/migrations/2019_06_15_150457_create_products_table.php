<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('products', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->string('price');
            $table->string('count');
            $table->string('image');
            $table->string('type');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('storage_id')->unsigned();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('storage_id')->references('id')->on('storages');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('products');
    }
}
