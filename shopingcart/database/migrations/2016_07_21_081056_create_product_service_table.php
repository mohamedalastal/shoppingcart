<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_service', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_reserve');
            $table->dateTime('time_reserve');
            $table->integer('numberofhours');
            $table->float('total_amount');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');            
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
        Schema::drop('product_service');
    }
}
