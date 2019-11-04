<?php

use Illuminate\Database\Seeder;
use App\Lich_su_mua_Credit;

class LichSuMuaCreditSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listLichsu[] = ['nguoi_choi_id'=>1,'goi_credit'=>2,'credit'=>800,'so_tien'=>79];
        $listLichsu[] = ['nguoi_choi_id'=>2,'goi_credit'=>1,'credit'=>1000,'so_tien'=>99];
        foreach($listLichsu as $Lichsu)
        App\Lich_su_mua_Credit::create($Lichsu);
    }
}
