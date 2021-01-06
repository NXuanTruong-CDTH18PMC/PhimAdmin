<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    protected $table = "Phong";

            protected $fillable = ['MaPhong','TenPhong','SoLuongGhe','MaRap','TrangThai'];
        
            public $timestamps = false;
}
