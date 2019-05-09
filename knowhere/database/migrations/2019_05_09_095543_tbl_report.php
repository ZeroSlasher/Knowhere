<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tbl_report', function (Blueprint $table) {
            $table->increments('rid');

            $table->biginteger('outletid')->unsigned();
            $table->foreign('outletid')->references('outletid')->on('tbl_outlet_prof');

            $table->string('email');

            $table->string('reason');

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
        Schema::dropIfExists('tbl_report');
    }
}