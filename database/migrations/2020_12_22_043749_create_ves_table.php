<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ve', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Phim')->unsigned();
            $table->integer('Phong')->unsigned();
            $table->integer('SC')->unsigned();
            $table->integer('NgayChieu')->unsigned();
            $table->integer('Ghe')->unsigned();
            $table->integer('Gia')->unsigned();
            $table->date('NgayTao');
            $table->timestamps();




            $table->foreign('Phim')->references('Phim')->on('lichchieu');
            $table->foreign('Phong')->references('Phong')->on('lichchieu');
            $table->foreign('SC')->references('SC')->on('lichchieu');

            $table->foreign('NgayChieu')->references('Phim')->on('lichchieu');
            $table->foreign('Ghe')->references('id')->on('ghe');
            $table->foreign('Gia')->references('id')->on('gia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ves');
    }
}
