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
        //The thao
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
            'dap_an'=>'2008','linh_vuc_id'=>'1','loai'=>'TheThao','phuong_an_A'=>'2004',
            'phuong_an_B'=>'2006','phuong_an_C'=>'2008','phuong_an_D'=>'2010'
        ];
        $listCauHoi[] = ['noi_dung'=>'CLB nào vô địch FIFA Club World Cup 2010 tổ chức tại Qatar?',
            'dap_an'=>'Inter Milan','linh_vuc_id'=>'1','loai'=>'TheThao','phuong_an_A'=>'Inter Milan',
            'phuong_an_B'=>'Real Madrid','phuong_an_C'=>'Bayern Munich','phuong_an_D'=>'Manchester United'
        ];
        $listCauHoi[] = ['noi_dung'=>'Vận động viên đứng đầu danh sách 100 vận động viên Việt Nam tiêu biểu của năm 2010 là vận động viên Vũ Thị Hương của môn thể thao nào?',
            'dap_an'=>'Điền kinh','linh_vuc_id'=>'1','loai'=>'TheThao','phuong_an_A'=>'Điền kinh',
            'phuong_an_B'=>'Cờ vua','phuong_an_C'=>'Karatedo','phuong_an_D'=>'Cầu lông'
        ];
        $listCauHoi[] = ['noi_dung'=>'Giải đua xe đạp vòng quanh nước Pháp năm 2001 có mấy chặng đua?',
            'dap_an'=>'16','linh_vuc_id'=>'1','loai'=>'TheThao','phuong_an_A'=>'16',
            'phuong_an_B'=>'21','phuong_an_C'=>'26','phuong_an_D'=>'31'
        ];
        $listCauHoi[] = ['noi_dung'=>'Vận động viên nào sau đây giành được huy chương vàng tại ASIAD 16 (tổ chức tại Quảng Châu-Trung Quốc 2010)',
            'dap_an'=>'Lê Bích Phương','linh_vuc_id'=>'1','loai'=>'TheThao','phuong_an_A'=>'Lê Bích Phương',
            'phuong_an_B'=>'Trương Thanh Hằng','phuong_an_C'=>'Vũ Thị Hương','phuong_an_D'=>'Lê Quang Liêm'
        ];
        $listCauHoi[] = ['noi_dung'=>'Đội tuyển bóng đá nào xếp thứ ba tại World Cup 2010?',
            'dap_an'=>'Tây Ban Nha','linh_vuc_id'=>'1','loai'=>'TheThao','phuong_an_A'=>'Tây Ban Nha',
            'phuong_an_B'=>'Hà Lan','phuong_an_C'=>'Đức','phuong_an_D'=>'Uruguay'
        ];
        $listCauHoi[] = ['noi_dung'=>'Trong môn quần vợt thì một năm có bao nhiêu giải Grand Slam được tổ chức?',
            'dap_an'=>'3','linh_vuc_id'=>'1','loai'=>'TheThao','phuong_an_A'=>'3',
            'phuong_an_B'=>'4','phuong_an_C'=>'5','phuong_an_D'=>'6'
        ];
        $listCauHoi[] = ['noi_dung'=>'Tại thể vận hội Olympic trẻ lần 1-2010 tại Singapore, thể thao Việt Nam giành được 4 huy chương, trong đó vận động viên nào giành được huy chương vàng duy nhất?',
            'dap_an'=>'Thạch Kim Tuấn (cử tạ)','linh_vuc_id'=>'1','loai'=>'TheThao','phuong_an_A'=>'Thạch Kim Tuấn (cử tạ)',
            'phuong_an_B'=>'Nguyễn Thanh Thảo (Taekwondo)','phuong_an_C'=>'Nguyễn Quốc Cương (Taekwondo)','phuong_an_D'=>'Vũ Thị Trang (cầu lồng)'
        ];
        $listCauHoi[] = ['noi_dung'=>'Nước nào là nước chủ nhà tại Copa America 2011?',
            'dap_an'=>'Argentina','linh_vuc_id'=>'1','loai'=>'TheThao','phuong_an_A'=>'Argentina',
            'phuong_an_B'=>'Boliviar','phuong_an_C'=>'Venezuela','phuong_an_D'=>'Paraguay'
        ];
        //Lich Su
        $listCauHoi[] = ['noi_dung'=>'Đại Ngu là quốc hiệu của triều đại nào?',
            'dap_an'=>'Triều Hồ','linh_vuc_id'=>'2','loai'=>'LichSu','phuong_an_A'=>'Triều Ngô',
            'phuong_an_B'=>'Triều Hồ','phuong_an_C'=>'Các chúa Nguyễn','phuong_an_D'=>'Nhà Tây Sơn'
        ];
        $listCauHoi[] = ['noi_dung'=>'Các vua Hùng đặt quốc hiệu nước ta là gì?',
            'dap_an'=>'Văn Lang','linh_vuc_id'=>'2','loai'=>'LichSu','phuong_an_A'=>'Văn Lang',
            'phuong_an_B'=>'Âu Lạc','phuong_an_C'=>'Vạn Xuân','phuong_an_D'=>'Đại Việt'
        ];
        $listCauHoi[] = ['noi_dung'=>': An Dương Vương đặt quốc hiệu nước ta là gì?',
            'dap_an'=>'Âu Lạc','linh_vuc_id'=>'2','loai'=>'LichSu','phuong_an_A'=>'Âu Lạc',
            'phuong_an_B'=>'Vạn Xuân','phuong_an_C'=>'Đại Cồ Việt','phuong_an_D'=>'Đại Việt'
        ];
        foreach($listCauHoi as $cauHoi){
            App\cau_hoi::create($cauHoi);
        }
    }
}
