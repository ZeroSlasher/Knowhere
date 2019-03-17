<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSubcatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_subcat', function (Blueprint $table) {
            $table->increments('subcat_id');

            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('cat_id')->on('tbl_cat')->onDelete('cascade');

            $table->string('subcatagory')->unique();

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
        Schema::dropIfExists('tbl_subcat');
    }
}
