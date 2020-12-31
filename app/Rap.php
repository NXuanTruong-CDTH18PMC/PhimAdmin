<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rap extends Model
{
    protected $table = "Rap";

            protected $fillable = ['MaRap','TenRap','DiaChi','SoPhong','SDT','TrangThai'];
        
            public $timestamps = false;
}
