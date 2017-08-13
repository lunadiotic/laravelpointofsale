<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosPurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos_purchase_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pos_purchase_id')->unsigned();
            $table->string('barcode');
            $table->bigInteger('price_selling')->unsigned();
            $table->integer('qty')->unsigned();
            $table->bigInteger('subtotal_price')->unsigned();
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
        Schema::dropIfExists('pos_purchase_details');
    }
}
