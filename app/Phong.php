<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    protected $table = "Phong";

            protected $fillable = ['id','TenPhong','SoLuongGhe','Rap','TrangThai'];
        
            public $timestamps = false;
        
}
