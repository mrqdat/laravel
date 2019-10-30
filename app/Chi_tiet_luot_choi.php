<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chi_tiet_luot_choi extends Model
{
    //
    protected $table = "Chi_tiet_luot_choi";

    protected $attribute = [
        'luot_choi_id',
        'cau_hoi_id',
        'phuong_an',
        'diem'

    ];
}
