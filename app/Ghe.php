<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ghe extends Model
{
    protected $table = "Ghe";

    protected $fillable = ['id','LoaiGhe','Rap','SoHang','SoCot',];

    public $timestamps = false;

    public function loaighe(){
        return $this->belongsTo('App\LoaiGhe','LoaiGhe','id');
    }
}
