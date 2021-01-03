<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gia extends Model
{
    protected $table = "Gia";

            protected $fillable = ['MaGia','Gia'];
        
            public $timestamps = false;
}
