<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichChieu extends Model
{
    protected $table = "LichChieu";

    protected $fillable = ['NgayChieu','Phim','Phong','SC','TrangThai'];

    public $timestamps = false;
}
