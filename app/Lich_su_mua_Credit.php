<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lich_su_mua_Credit extends Model
{
    protected $table = 'lich_su_mua__credits';

    protected $fillable = [
        'nguoi_choi_id',
        'goi_credit',
        'credit',
        'so_tien'
    ];
    public function LayTenNguoiChoi(){
        
        return $this->belongsTo('App\Nguoi_choi', 'nguoi_choi_id', 'id');
        
    }
    public function LayGoiCredit(){
        
        return $this->belongsTo('App\Goi_Credit', 'goi_credit', 'id');
        
    }
}
