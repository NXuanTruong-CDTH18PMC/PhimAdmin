<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    protected $table = "Phim";

            protected $fillable = ['MaPhim','TenPhim','NgayChieu','NgayKetThuc','ThoiGian','Daoien','DienVien','MaTL','Diem','HinhAnh','Trailer','TrangThai','Tuoi'];
        
            public $timestamps = false;
}
