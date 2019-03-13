<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOwnerRegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_owner_reg', function (Blueprint $table) {
            $table->string('email');

            $table->integer('login_id')->unsigned();
            $table->foreign('login_id')
            ->references('login_id')
            ->on('tbl_login')
            ->onDelete('cascade');

            $table->string('name');

            $table->integer('loc_id')->unsigned();
            $table->foreign('loc_id')
            ->references('loc_id')
            ->on('tbl_locality')
            ->onDelete('cascade');
            
            $table->string('phone');

            $table->string('address');

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
        Schema::dropIfExists('tbl_owner_reg');
    }
}
