<?php

use Illuminate\Database\Seeder;
use App\quan_tri_vien;

class QuanTriVienSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listQTV = [
            ['ten_dang_nhap'   => 'adminHT',
            'mat_khau'        => Hash::make('1010'),
            'Hoten'           => 'ThinhLe'],
            ['ten_dang_nhap'   => 'adminQD',
            'mat_khau'        => Hash::make('1010'),
            'Hoten'           => 'QuocDat'],
            ['ten_dang_nhap'   => 'adminVT',
            'mat_khau'        => Hash::make('1010'),
            'Hoten'           => 'VanThien']
        ];
        foreach($listQTV as $qtv)
             App\quan_tri_vien::create($qtv);
    }
}
