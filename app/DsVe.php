<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DsVe extends Model
{
    protected $table = "dsve";

    protected $fillable = ['id','Soluong','Ve','TV','NgayTao',];

    public $timestamps = false;
    public function thanhvien(){
        return $this->belongsTo('App\ThanhVien','TV','id');
    }
}
