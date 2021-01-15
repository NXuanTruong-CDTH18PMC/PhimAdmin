<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    //
    protected $table = "TheLoai";

            protected $fillable = ['id','TenTL'];
        
            public $timestamps = false;
            
}
