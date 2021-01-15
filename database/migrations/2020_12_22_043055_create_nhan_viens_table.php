<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenNV');
            $table->tinyInteger('CMND');
            $table->tinyInteger('SDT');
            $table->string('DiaChi')->nullable();
            $table->integer('Rap')->unsigned();
            $table->string('Email');
            $table->string('Hinh');
            $table->string('TenTK');
            $table->string('MK');
            $table->tinyInteger('TrangThai')->default(1);
            $table->timestamps();

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
        Schema::dropIfExists('nhan_viens');
    }
}
