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
        
            $table->date('NgayChieu');
            $table->integer('Phim')->unsigned();
            $table->integer('Phong')->unsigned();
            $table->integer('SC')->unsigned();
            $table->tinyInteger('TrangThai')->default(1);
            $table->timestamps();

            $table->foreign('Phim')->references('id')->on('phim');
            $table->foreign('Phong')->references('id')->on('phong');
            $table->foreign('SC')->references('id')->on('suatchieu');
            $table->primary(['Phim','Phong','SC']);
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
