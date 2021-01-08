<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('desc');
            $table->double('size');
            $table->decimal('price');
            $table->string('material');
            $table->string('style');
            $table->integer('waterproof');
            $table->string('band_material');
            $table->integer('warranty');
            $table->string('gender');
            $table->string('discount');

            $table->bigInteger('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brand');

            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category');
            
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
        Schema::dropIfExists('product');
    }
}
