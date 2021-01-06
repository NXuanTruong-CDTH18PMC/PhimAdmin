<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiGhe extends Model
{
    protected $table = "LoaiGhe";

    protected $fillable = ['MaLoaiGhe','TenLoai','MaGia',];

    public $timestamps = false;
}
