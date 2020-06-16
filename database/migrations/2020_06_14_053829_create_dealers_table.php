<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name_dealers')->nullable();
            $table->string('province')->nullable();
            $table->string('dealers')->nullable();
            $table->string('isuzu_all')->nullable();
            $table->string('Pickup_and_multipurpose')->nullable();
            $table->string('Paint_and_body')->nullable();
            $table->string('location')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('image')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dealers');
    }
}
