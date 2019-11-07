<?php

namespace App;

use  Illuminate\Foundation\Auth\User as Authenticatable;

class quan_tri_vien extends Authenticatable
{
    protected $table = 'quan_tri_viens';

    protected $fillable = [
        'ten_dang_nhap',
        'mat_khau',
        'Hoten'
    ];
    public function getPasswordAttribute() 
    { 
        return $this->mat_khau; 
    }
    public function getAuthPassword() 
    { 
        return $this->mat_khau; 
    }
    

}
