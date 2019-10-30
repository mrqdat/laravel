<?php

use Illuminate\Database\Seeder;
use App\Linh_Vuc;

class LinhVucSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listLinhVuc = [
            ['ten_linh_vuc'=>'The Thao'],
            ['ten_linh_vuc'=>'Lich su'],
            ['ten_linh_vuc'=>'Am nhac - Phim'],
            ['ten_linh_vuc'=>'Dia ly'],
            ['ten_linh_vuc'=>'Van Hoc'],
            ['ten_linh_vuc'=>'Y Hoc'],
            ['ten_linh_vuc'=>'Van hoa - Su kien'],
            ['ten_linh_vuc'=>'Khoa hoc tu nhien']
        ];
        foreach($listLinhVuc as $linhVuc)
             App\Linh_Vuc::create($linhVuc);
    }
}
