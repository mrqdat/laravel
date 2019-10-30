<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goi_Credit extends Model
{
    //
    protected $table = "Goi_Credit";

    protected $attribute = [
        'ten_goi',
        'credit',
        'so_tien'

    ];
}
