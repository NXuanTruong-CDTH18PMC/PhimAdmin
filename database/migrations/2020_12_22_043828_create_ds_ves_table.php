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
            $table->increments('MaDS');
            $table->tinyInteger('SoLuong');
            $table->integer('MaVe')->unsigned();
            $table->integer('MaTV')->unsigned();
            $table->date('NgayTao');
            $table->timestamps();

            $table->foreign('MaVe')->references('MaVe')->on('ve');
            $table->foreign('MaTV')->references('MaTV')->on('thanhvien');
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
