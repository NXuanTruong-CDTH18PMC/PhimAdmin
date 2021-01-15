<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gia extends Model
{
    protected $table = "gia";

            protected $fillable = ['id','Phim','Gia'];
        
            public $timestamps = false;

            public function phim(){
                return $this->belongsTo('App\Phim','Phim','id');
            }
}
