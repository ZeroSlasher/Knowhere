<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPaymets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_payments', function (Blueprint $table) {
            $table->increments('pay_id');

            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('tbl_login')->onDelete('cascade');

            $table->integer('ad_id')->unsigned();
            $table->foreign('ad_id')->references('ad_id')->on('tbl_advert');

            $table->string('cname');

            $table->string('cc_number');

            $table->string('ctype');

            $table->string('cvv');

            $table->string('month');

            $table->string('year');

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
        Schema::dropIfExists('tbl_payments');
    }
}