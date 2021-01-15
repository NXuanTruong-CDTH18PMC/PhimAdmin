<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThanhVien extends Model
{
    protected $table = "thanhvien";

            protected $fillable = ['id','TenTV','SDT','DiaChi','Email','Hinh','TenTK','MK','TrangThai',];
        
            public $timestamps = false;
}
