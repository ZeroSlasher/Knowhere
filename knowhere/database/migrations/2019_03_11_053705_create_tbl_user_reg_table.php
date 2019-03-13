<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUserRegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_reg', function (Blueprint $table) {
            $table->string('email')->primary();

            $table->string('name');

            $table->integer('loc_id')->unsigned();
            $table->foreign('loc_id')
            ->references('loc_id')
            ->on('tbl_locality');
            
            $table->string('phone');

            // $table->string('address');

            // $table->string('status')->unsigned();
            // $table->foreign('status')
            // ->references('status')
            // ->on('tbl_status')
            // ->onDelete('cascade');

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
        Schema::dropIfExists('tbl_user_reg');
    }
}
