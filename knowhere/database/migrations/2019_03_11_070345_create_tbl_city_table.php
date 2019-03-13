<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_city', function (Blueprint $table) {
            $table->increments('city_id');

            $table->integer('dist_id')->unsigned();
            $table->foreign('dist_id')
            ->references('dist_id')
            ->on('tbl_district')
            ->onDelete('cascade');

            $table->string('city')->unique();
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
        Schema::dropIfExists('city');
    }
}
