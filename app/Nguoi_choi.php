<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nguoi_choi extends Model
{
    use SoftDeletes;
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
