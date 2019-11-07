<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Luot_choi extends Model
{
    use SoftDeletes;
    //
    protected $table =  'luot_chois';

    protected $fillable = [
        'nguoi_choi_id',
        'so_cau',
        'diem',
        'ngay_gio'
    ];

}
