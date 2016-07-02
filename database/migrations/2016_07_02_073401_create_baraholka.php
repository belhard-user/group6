<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaraholka extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->mediumText('desc');
            $table->float('price', 8, 2);

            $table->timestamps();
        });

        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->string('path');
            $table->string('th_path');
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
        Schema::drop('photos');
        Schema::drop('tags');
    }
}
