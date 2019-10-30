<?php

use Illuminate\Database\Seeder;
use App\cau_hoi;

class CauHoiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listCauHoi[] = ['noi_dung'=>'Giải Grand Slam đầu tiên trong năm là giải nào?',
            'dap_an'=>'Austrlia mở rộng','linh_vuc_id'=>'1','loai'=>'TheThao','phuong_an_A'=>'Austrlia mở rộng',
            'phuong_an_B'=>'Wimbledon','phuong_an_C'=>'Roland Garos','phuong_an_D'=>'Mỹ mở rộng'
        ];
        $listCauHoi[] = ['noi_dung'=>'Cùng với Hà Nội T&T (vô địch V-League 2010), CLB nào của Việt Nam tham dự AFC Cup 2011?',
            'dap_an'=>'Sông Lam Nghệ An','linh_vuc_id'=>'1','loai'=>'TheThao','phuong_an_A'=>'Sông Lam Nghệ An',
            'phuong_an_B'=>'SHB Đà Nẵng','phuong_an_C'=>'Hoàng Anh Gia Lai','phuong_an_D'=>'Becamex Bình Dương'
        ];
        $listCauHoi[] = ['noi_dung'=>'AFC Asian Cup 2011 được tổ chức tại quốc gia nào?',
            'dap_an'=>'Qatar','linh_vuc_id'=>'1','loai'=>'TheThao','phuong_an_A'=>'Qatar',
            'phuong_an_B'=>'Hàn Quốc','phuong_an_C'=>'Nhật Bản','phuong_an_D'=>'Iraq'
        ];
        $listCauHoi[] = ['noi_dung'=>'Đội nào lên ngôi vô địch AFC Asian Cup 2011 tổ chức tại Qatar?',
            'dap_an'=>'Nhật Bản','linh_vuc_id'=>'1','loai'=>'TheThao','phuong_an_A'=>'Nhật Bản',
            'phuong_an_B'=>'Australia','phuong_an_C'=>'Hàn Quốc','phuong_an_D'=>'Uzbekistan'
        ];
        $listCauHoi[] = ['noi_dung'=>'Việt Nam lần đầu tiên vô địch AFF Cup là vào năm nào?',
            'dap_an'=>'2004','linh_vuc_id'=>'1','loai'=>'TheThao','phuong_an_A'=>'2004',
            'phuong_an_B'=>'2006','phuong_an_C'=>'2008','phuong_an_D'=>'2010'
        ];
        foreach($listCauHoi as $cauHoi){
            App\cau_hoi::create($cauHoi);
        }
    }
}
