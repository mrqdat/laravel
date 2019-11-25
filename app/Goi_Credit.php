<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Goi_Credit extends Model
{
    use SoftDeletes;
    //
    protected $table = "Goi__Credits";

    protected $fillable = [
        'ten_goi',
        'credit',
        'so_tien'

    ];
}
