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
            $table->increments('id');
            $table->string('TenPhong');
            $table->tinyInteger('SoLuongGhe');
            $table->integer('Rap')->unsigned();
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
        Schema::dropIfExists('phongs');
    }
}
