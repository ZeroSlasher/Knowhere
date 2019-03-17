<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUserRegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_reg', function (Blueprint $table) {
            $table->increments('uregid');

            $table->string('email');
            $table->foreign('email')->references('email')->on('tbl_login')->onDelete('cascade');

            $table->string('name');

            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('city_id')->on('tbl_city');

            $table->string('phone');

            $table->string('image');

            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('status_id')->on('tbl_status')->onDelete('cascade');

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
        Schema::dropIfExists('tbl_user_reg');
    }
}