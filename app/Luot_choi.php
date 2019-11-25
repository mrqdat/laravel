<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Luot_choi extends Model
{
    //
    protected $table =  'luot_chois';

    protected $fillable = [
        'nguoi_choi_id',
        'so_cau',
        'diem',
        'ngay_gio'
    ];

    public function LayTenNguoiChoi(){
        
        return $this->belongsTo('App\Nguoi_choi', 'nguoi_choi_id', 'id');
        
    }
}
