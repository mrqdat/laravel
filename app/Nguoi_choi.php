<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nguoi_choi extends Model
{
    protected $table =  'nguoi_chois';

    protected $fillable = [
        "ten_dang_nhap",
        "mat_khau",
        "Email",
        "hinh_dai_dien",
        "diem_cao_nhat",
        "credit"
    ];
}
