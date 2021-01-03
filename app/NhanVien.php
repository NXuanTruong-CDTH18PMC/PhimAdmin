<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    protected $table = "NhanVien";

            protected $fillable = ['MaNV','TenNV','CMND','SDT','DiaChi','MaRap','Email','Hinh','TenTK','MK','TrangThai'];
        
            public $timestamps = false;
}
