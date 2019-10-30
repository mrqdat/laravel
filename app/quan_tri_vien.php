<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quan_tri_vien extends Model
{
    protected $table = 'quan_tri_viens';

    protected $fillable = [
        'ten_dang_nhap',
        'mat_khau',
        'Hoten'
    ];
}
