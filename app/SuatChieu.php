<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuatChieu extends Model
{
    //
    protected $table = "SuatChieu";
    protected $fillable = ['MaSC','ThoiGianChieu','TrangThai'];
        
            public $timestamps = false;
}
