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
            $table->string('desc', 2048);
            $table->double('size');
            $table->bigInteger('price');
            $table->integer('waterproof');
            $table->integer('warranty');

            $table->bigInteger('material_id')->unsigned();
            $table->foreign('material_id')->references('id')->on('material');

            $table->bigInteger('style_id')->unsigned();
            $table->foreign('style_id')->references('id')->on('style');

            $table->bigInteger('band_material_id')->unsigned();
            $table->foreign('band_material_id')->references('id')->on('band_material');

            $table->bigInteger('gender_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('gender');

            $table->bigInteger('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brand');

            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category');

            $table->double('discount');
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
