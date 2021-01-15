<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    protected $table = "ve";

    protected $fillable = ['id',"Phim","Phong",'SC','NgayChieu','Ghe','Gia','NgayTao'];

    public $timestamps = false;
    public function gia(){
        return $this->belongsTo('App\gia','Gia','id');
    }
    public function phim(){
        return $this->belongsTo('App\Phim','Phim','id');
    }
    public function ghe(){
        return $this->belongsTo('App\Ghe','Ghe','id');
    }
    public function suatchieu(){
        return $this->belongsTo('App\SuatChieu','SC','id');
    }
    public function lichchieu(){
        return $this->belongsTo('App\LichChieu','NgayChieu','Phim');
    }
}
