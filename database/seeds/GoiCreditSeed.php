<?php

use Illuminate\Database\Seeder;
use App\Goi_Credit;

class GoiCreditSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listCredit = [
            ['ten_goi'  =>'Bach Kim',
            'credit'    =>'1000',
            'so_tien'   =>'99'],
            ['ten_goi'  =>'Kim Cuong',
            'credit'    =>'800',
            'so_tien'   =>'79'],
            ['ten_goi'  =>'Vang',
            'credit'    =>'500',
            'so_tien'   =>'49']
        ];
        foreach($listCredit as $goicredit)
            App\Goi_Credit::create($goicredit);
    }
}
