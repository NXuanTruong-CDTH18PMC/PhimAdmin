<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phong', function (Blueprint $table) {
            $table->increments('MaPhong');
            $table->string('TenPhong');
            $table->tinyInteger('SoLuongGhe');
            $table->integer('MaRap')->unsigned();
            $table->tinyInteger('TrangThai')->default(1);
            $table->timestamps();

            $table->foreign('MaRap')->references('MaRap')->on('rap');
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phongs');
    }
}
