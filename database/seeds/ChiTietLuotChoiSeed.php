<?php

use Illuminate\Database\Seeder;
use App\Chi_tiet_luot_choi;

class ChiTietLuotChoiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lstCTluotchoi = [
            ['luot_choi_id' => 1,
            'cau_hoi_id' => 1,
            'phuong_an'=> "A",
            'diem'=>10],
        ];
        
        foreach($lstCTluotchoi as $ctluotchoi)
             App\Chi_tiet_luot_choi::create($ctluotchoi);
    }
}
