<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('car_model')->nullable();
            $table->string('body_car')->nullable();
            $table->string('rg_number')->nullable();
            $table->string('car_color');
            $table->string('offtion')->nullable();
            $table->string('vg_number')->nullable();
            $table->integer('user_id')->unsigned();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cars');
    }
}
