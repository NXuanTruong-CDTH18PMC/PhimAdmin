<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiGhe extends Model
{
    protected $table = "LoaiGhe";

    protected $fillable = ['id','TenLoai',];

    public $timestamps = false;
}
