<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblAdvert extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_advert', function (Blueprint $table) {
            $table->increments('ad_id');

            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('tbl_login')->onDelete('cascade');

            $table->biginteger('outletid')->unsigned();
            $table->foreign('outletid')->references('outletid')->on('tbl_outlet_prof');

            $table->string('ad_content');

            $table->string('description', 500);

            $table->integer('pkg_id')->unsigned();
            $table->foreign('pkg_id')->references('pkg_id')->on('tbl_package');

            //payment id

            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('status_id')->on('tbl_status')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_advert');
    }
}