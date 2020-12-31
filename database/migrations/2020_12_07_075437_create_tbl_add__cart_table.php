<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAddCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_add__cart', function (Blueprint $table) {
           $table->Increments('add_cart_id');
            $table->string('add_cart_web_id');
            $table->string('add_to_cart_item');
            $table->string('add_to_cart_quantity');
            $table->string('add_to_cart_price');
            $table->string('add_to_cart_total');
            $table->string('add_to_cart_status');
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
        Schema::dropIfExists('tbl_add__cart');
    }
}
