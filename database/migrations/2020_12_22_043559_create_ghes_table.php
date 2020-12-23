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
            $table->increments('MaGhe');
            $table->integer('MaLoaiGhe')->unsigned();
            $table->tinyInteger('SoHang');
            $table->string('SoCot');
            $table->timestamps();

            $table->foreign('MaLoaiGhe')->references('MaLoaiGhe')->on('loaighe');
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
