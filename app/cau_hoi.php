<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cau_hoi extends Model
{
    //
    protected $table = 'cau_hoi';

    protected $attribute = [
        'dap_an'.
        'linh_vuc_id',
        'loai',
        'phuong_an_A',
        'phuong_an_B',
        'phuong_an_C',
        'phuong_an_D'

    ];
}
