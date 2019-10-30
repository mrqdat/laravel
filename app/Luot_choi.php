<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Luot_choi extends Model
{
    //
    protected $table = "Luot_choi";

    protected $attribute = [
        'nguoi_choi_id',
        'so_cau',
        'diem',
        'ngay_gio'

    ];
}
