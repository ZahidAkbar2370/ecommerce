<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CraateTblProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->Increments('product_id');
            $table->integer('category_id');
            $table->integer('manufacture_id');
            $table->string('product_name');
            $table->string('product_short_description');
            $table->string('product_long_description');
            $table->string('product_price');
            $table->string('product_image');
            $table->string('product_size');
            $table->string('product_color');
            $table->integer('publication_status');
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
        Schema::dropIfExists('tbl_product');
    }
}
