<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblReview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_review', function (Blueprint $table) {
            $table->increments('rev_id');

            $table->string('email');

            $table->string('name');

            $table->biginteger('outlet_id');
            $table->foreign('outlet_id')->references('outlet_id')->on('tbl_outlet_profile');

            $table->string('review');

            $table->float('rating');

            $table->string('title');

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
        Schema::dropIfExists('tbl_review');
    }
}