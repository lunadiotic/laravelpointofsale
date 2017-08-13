<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosSaleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos_sale_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pos_sale_id')->unsigned();
            $table->string('barcode');
            $table->bigInteger('price_selling')->unsigned();
            $table->integer('qty')->unsigned();
            $table->integer('discount')->unsigned();
            $table->bigInteger('price_subtotal')->unsigned();
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
        Schema::dropIfExists('pos_sale_details');
    }
}
