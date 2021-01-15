<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDsVesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dsve', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('SoLuong');
            $table->integer('Ve')->unsigned();
            $table->integer('TV')->unsigned();
            $table->date('NgayTao');
            $table->timestamps();

            $table->foreign('Ve')->references('id')->on('ve');
            $table->foreign('TV')->references('id')->on('thanhvien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ds_ves');
    }
}
