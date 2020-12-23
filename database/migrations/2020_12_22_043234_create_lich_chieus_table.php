<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichChieusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichchieu', function (Blueprint $table) {
            $table->increments('MaLC');
            $table->date('NgayChieu');
            $table->integer('MaPhim')->unsigned();
            $table->integer('MaPhong')->unsigned();
            $table->integer('MaSC')->unsigned();
            $table->tinyInteger('TrangThai')->default(1);
            $table->timestamps();

            $table->foreign('MaPhim')->references('MaPhim')->on('phim');
            $table->foreign('MaPhong')->references('MaPhong')->on('phong');
            $table->foreign('MaSC')->references('MaSC')->on('suatchieu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lich_chieus');
    }
}
