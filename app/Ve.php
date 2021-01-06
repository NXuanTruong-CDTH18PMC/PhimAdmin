<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    protected $table = "ve";

    protected $fillable = ['MaVe','MaLC','MaGhe','ThanhTien','NgayTao',];

    public $timestamps = false;
}
