<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThanhViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanhvien', function (Blueprint $table) {
            $table->increments('MaTV');
            $table->string('TenTV');
            $table->tinyInteger('SDT');
            $table->string('DiaChi')->nullable();
            $table->string('Email')->nullable();
            $table->string('Hinh')->nullable();
            $table->string('TenTK');
            $table->string('MK');
            $table->tinyInteger('TrangThai')->default(1);
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
        Schema::dropIfExists('thanh_viens');
    }
}
