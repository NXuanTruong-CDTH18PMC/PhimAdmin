<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Authenticatable
{
    use Notifiable;
    protected $guard = 'NhanVien';

    protected $table = "NhanVien";

            protected $fillable = ['MaNV','TenNV','CMND','SDT','DiaChi','MaRap','Email','Hinh','TenTK','MK','TrangThai'];
        
            public $timestamps = false;
}
