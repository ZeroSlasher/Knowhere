<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblSuggest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_suggest', function (Blueprint $table) {
            $table->increments('sid');

            $table->biginteger('outletid')->unsigned();
            $table->foreign('outletid')->references('outletid')->on('tbl_outlet_prof');

            $table->integer('uid')->unsigned();
            $table->foreign('uid')->references('id')->on('tbl_login')->onDelete('cascade');

            $table->string('email');

            $table->string('comment');

            $table->string('subject');

            $table->timestamps();
        });}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_suggest');
    }
}