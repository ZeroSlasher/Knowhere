<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblLocalityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_locality', function (Blueprint $table) {
            $table->increments('loc_id');

            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')
            ->references('city_id')
            ->on('tbl_city')
            ->onDelete('cascade');

            $table->string('locality')->unique();
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
        Schema::dropIfExists('tbl_locality');
    }
}
