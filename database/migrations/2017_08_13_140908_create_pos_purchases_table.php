<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos_purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('suplier_id')->unsigned();
            $table->integer('total_item')->unsigned();
            $table->bigInteger('total_price')->unsigned();
            $table->integer('discount')->unsigned();
            $table->bigInteger('pay')->unsigned();
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
        Schema::dropIfExists('pos_purchases');
    }
}
