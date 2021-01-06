<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DsVe extends Model
{
    protected $table = "dsve";

    protected $fillable = ['MaDS','Soluong','MaVe','MaTV','NgayTao',];

    public $timestamps = false;
}
