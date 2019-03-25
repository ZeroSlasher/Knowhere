<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblOutletProfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_outlet_prof', function (Blueprint $table) {
            $table->bigIncrements('outletid');

            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('tbl_login')->onDelete('cascade');

            $table->integer('oregid')->unsigned();
            $table->foreign('oregid')->references('oregid')->on('tbl_owner_reg')->onDelete('cascade');

            $table->string('outletname');

            $table->string('ownername');

            $table->string('address');

            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();

            $table->string('description', 500);

            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('city_id')->on('tbl_city');

            $table->integer('subcat_id')->unsigned();
            $table->foreign('subcat_id')->references('subcat_id')->on('tbl_subcat');

            $table->integer('Service_id')->unsigned();
            $table->foreign('Service_id')->references('Service_id')->on('tbl_services')->onDelete('cascade');

            $table->string('phone1');

            $table->string('phone2');

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
        Schema::dropIfExists('tbl_outlet_prof');
    }
}