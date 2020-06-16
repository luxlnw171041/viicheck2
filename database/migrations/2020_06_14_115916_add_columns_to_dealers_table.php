<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dealers', function (Blueprint $table) {
            $table->string('dealer')->nullable();
            $table->string('pickup_and_multipurpose')->nullable();
            $table->string('paint_and_body')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dealers', function (Blueprint $table) {
            //
        });
    }
}
