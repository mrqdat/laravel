<?php

use Illuminate\Database\Seeder;
use App\Luot_choi;

class LuotChoiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listluotchoi = [
            ['nguoi_choi_id' => 1,'so_cau' => 1,'diem'=> 10,'ngay_gio'=>'2019-11-07 17:58:32']
        ];

        foreach($listluotchoi as $luotchoi)
        App\Luot_choi::create($luotchoi);

    }
}
