<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblListingRqstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_listing_rqst', function (Blueprint $table) {
            $table->bigIncrements('rqst_id')->unsigned();

            $table->string('email');

            $table->string('outletname');

            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('city_id')->on('tbl_city');
            
            $table->string('phone');

            $table->string('ownername');

            $table->integer('subcat_id')->unsigned();
            $table->foreign('subcat_id')->references('subcat_id')->on('tbl_subcat');

            $table->string('Proof1');

            $table->string('Proof2');

            $table->string('Proof3');

            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('status_id')->on('tbl_status');

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
        Schema::dropIfExists('tbl_listing_rqst');
    }
}
