<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ghe extends Model
{
    protected $table = "Ghe";

    protected $fillable = ['MaGhe','MaLoaiGhe','SoHang','SoCot',];

    public $timestamps = false;
}
