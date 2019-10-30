<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lich_su_mua_Credit extends Model
{
    //
    protected $table = "Lich_su_mua_Credit";

    protected $attribute = [
        'nguoi_choi_id',
        'goi_credit',
        'credit',
        'so_tien'

    ];
}
