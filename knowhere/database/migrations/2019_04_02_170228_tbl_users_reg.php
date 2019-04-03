<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblUsersReg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users_reg', function (Blueprint $table) {
            $table->increments('regid');

            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('tbl_login')->onDelete('cascade');

            $table->string('name');

            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('city_id')->on('tbl_city');

            $table->string('phone');

            $table->string('oaddress')->nullable();

            $table->string('image')->nullable();

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
        Schema::dropIfExists('tbl_users_reg');

    }
}