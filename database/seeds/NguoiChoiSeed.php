<?php

use Illuminate\Database\Seeder;
use App\Nguoi_choi;

class NguoiChoiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listNguoiChoi = [
            ['ten_dang_nhap'=>'heydayle','mat_khau'=>'$2a$'.substr(Hash::make('1001'),5),'Email'=>'hungthinh.ckc@gmail.com',
            'hinh_dai_dien'=>'img.jpg','diem_cao_nhat'=>'99999','credit'=>'999999'],
            ['ten_dang_nhap'=>'user000','mat_khau'=>'$2a$'.substr(Hash::make('123'),5),'Email'=>'userr.ckc@gmail.com',
            'hinh_dai_dien'=>'img1.jpg','diem_cao_nhat'=>'333','credit'=>'0']
        ];
        
        // foreach($listNguoiChoi as $nguoichoi)
        //      $nguoichoi::update(
        //          ['mat_khau' => substr($nguoichoi->'mat_khau',)]
        //      );

        foreach($listNguoiChoi as $nguoichoi)
             App\Nguoi_choi::create($nguoichoi);
    }
}
