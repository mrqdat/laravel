<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cau_hoi extends Model
{
    //
    protected $table = 'cau_hois';

    protected $fillable = [
        'noi_dung',
        'dap_an',
        'linh_vuc_id',
        'loai',
        'phuong_an_A',
        'phuong_an_B',
        'phuong_an_C',
        'phuong_an_D'
    ];
    public function LayLinhVuc(){
        
        return $this->belongsTo('App\Linh_Vuc', 'linh_vuc_id', 'id');
        
    }

}
