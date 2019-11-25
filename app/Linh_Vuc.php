<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Linh_Vuc extends Model
{
    use SoftDeletes;
    //
    protected $table =  'linh__vucs';

    protected $fillable = [
        'ten_linh_vuc'
    ];

}
