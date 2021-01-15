<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{

    protected $table = "NhanVien";

            protected $fillable = ['id','TenNV','CMND','SDT','DiaChi','Rap','Email','Hinh','TenTK','MK','TrangThai'];
        
            public $timestamps = false;
}
