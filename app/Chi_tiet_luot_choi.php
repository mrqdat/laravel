<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chi_tiet_luot_choi extends Model
{
    //
    protected $tabel = 'chi_tiet_luot_chois';

    protected $fillabel = [
        'luot_choi_id',
        'cau_hoi_id',
        'phuong_an',
        'diem'
    ];

    public function layCTLuotChoi(){
        return $this->belongsTo('App\Luot_choi','luot_choi_id','id');
    }

    public function laycauhoi(){
        return $this->belongsTo('App\cau_hoi','cau_hoi_id','id');
    }
}
