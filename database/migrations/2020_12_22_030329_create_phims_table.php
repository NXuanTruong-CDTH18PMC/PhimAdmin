<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phim', function (Blueprint $table) {
            
        
            $table->increments('MaPhim');
            $table ->string('TenPhim');
            $table ->date('NgayChieu');
            $table ->date('NgayKetThuc');
            $table ->string('ThoiGian');
            $table->integer('MaTL')->unsigned();
            $table ->string('DaoDien')->nullable();
            $table->string('DienVien')->nullable(); 
            $table->tinyInteger('Diem')->nullable();
            $table ->string('HinhAnh');
            $table ->string('Trailer')->nullable();
            $table ->tinyInteger('TrangThai')->default(1);
            $table ->tinyInteger('Tuoi')->nullable();
            $table->timestamps();
           
            
            $table->foreign('MaTL')->references('MaTL')->on('theloai');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phims');
    }
}
