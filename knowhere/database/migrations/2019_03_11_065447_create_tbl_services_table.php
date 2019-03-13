<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_services', function (Blueprint $table) {
            $table->increments('service_id');
            $table->string('service')->unique();
            
            $table->integer('Subcat_id')->unsigned();
            $table->foreign('Subcat_id')
            ->references('Subcat_id')
            ->on('tbl_subcat')
            ->onDelete('cascade');

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
        Schema::dropIfExists('tbl_services');
    }
}
