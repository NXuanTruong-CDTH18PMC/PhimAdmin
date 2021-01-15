<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    protected $table = "Phim";

            protected $fillable = ['id','TenPhim','NgayChieu','NgayKetThuc','ThoiGian','Daoien','DienVien','TL','Diem','HinhAnh','Trailer','TrangThai','Tuoi'];
        
            public $timestamps = false;
            public function tl(){
                return $this->belongsTo('App\TheLoai','TL','id');
            }
}
