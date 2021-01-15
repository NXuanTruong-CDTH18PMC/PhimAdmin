<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('LoaiGhe')->unsigned();
            $table->integer('Rap')->unsigned();
            $table->tinyInteger('SoHang');
            $table->string('SoCot');
            $table->timestamps();

            $table->foreign('LoaiGhe')->references('id')->on('loaighe');
            $table->foreign('Rap')->references('id')->on('rap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ghes');
    }
}
