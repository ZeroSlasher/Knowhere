<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblOwnerRegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_owner_reg', function (Blueprint $table) {
            $table->increments('oregid');

            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('tbl_login')->onDelete('cascade');

            $table->string('name');

            $table->string('email')->unique();

            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('city_id')->on('tbl_city');

            $table->string('phone');

            $table->string('address')->nullable();

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
        Schema::dropIfExists('tbl_owner_reg');
    }
}