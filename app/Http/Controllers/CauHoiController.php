<?php

namespace App\Http\Controllers;
use App\Components\Notification;

use Illuminate\Http\Request;
use App\cau_hoi;
use App\Linh_Vuc;

class CauHoiController extends Controller
{
    use Notification;
    public function LayDataCauHoi(){
        $listCauHoi = cau_hoi::all();

        return view('tableCauHoi',[
            'noidung' => $listCauHoi
        ]);
    }

    //chuyển hướng qua form thêm câu hỏi
    public function FormThemCauHoi(){

        //lấy lĩnh vực để hiển thị lên Drop-down
        $listLinhVuc = Linh_Vuc::all();
        return view('ThemCH',['tenLinhVuc' => $listLinhVuc]);
    }
    //Thêm mới câu hỏi
    public function ThemDataCauHoi(Request $req){

        //Lấy dữ liệu từ input
        $noidung = $req->Noidung;
        $dapan = $req->Dapan;
        $idlv = $req->IdLV;
        $loai = $req->Loai;
        $pa = $req->PaA;
        $pb = $req->PaB;
        $pc = $req->PaC;
        $pd = $req->PaD;
        if($noidung==""||$dapan==""||$idlv==""||$loai==""||$pa==""||$pb==""||$pc==""||$pd=="")
        {
            self::error('Không được để trống!');
            return redirect()->route('ThemCauHoiRoute');
        }
        else
        {
        //Tạo câu hỏi
        cau_hoi::create(
            ['noi_dung'=>$noidung,
            'dap_an'=>$dapan,
            'linh_vuc_id'=>$idlv,
            'loai'=>$loai,
            'phuong_an_A'=>$pa,
            'phuong_an_B'=>$pb,
            'phuong_an_C'=>$pc,
            'phuong_an_D'=>$pd
            ]);
        
        self::success('Add success');
        return redirect()->route('CauHoiRoute');
    }
        
    }

    //Hiển thị câu hỏi vừa chọn lên form sửa câu hỏi
    public function TimCauHoi($id)
    {
        //lấy lĩnh vực để hiển thị lên Drop-down
        $listLinhVuc = Linh_Vuc::all();

        //Lấy câu hỏi
        $cauhoi = cau_hoi::find($id);
        return view('SuaCauHoi',
            ['cauhoifind'=>$cauhoi,
            'tenLinhVuc'=>$listLinhVuc
            ]);
    }

    //Cập nhật thông tin vừa sửa
    public function CapNhatCauHoi($id, Request $req){
        //tìm câu hỏi
        $cauhoi = cau_hoi::find($id);

        if($cauhoi == null){
            self::error('Update failed');
        }
        else{
            //cập nhật câu hỏi
            $cauhoi->update(
                ['noi_dung'=>$req->Noidung,
                'dap_an'=>$req->Dapan,
                'id_linh_vuc'=>$req->IdLV,
                'loai'=>$req->Loai,
                'phuong_an_A'=>$req->PaA,
                'phuong_an_B'=>$req->PaB,
                'phuong_an_C'=>$req->PaC,
                'phuong_an_D'=>$req->PaD
            ]);
            
            self::success('Update success');
            return redirect()->route('CauHoiRoute');
        }
    }
    
    //Thêm câu hỏi vừa chọn vào thùng rác
    public function XoaDataCauHoi($id){
        $cauhoi = cau_hoi::find($id);
        
        if($cauhoi == null){
            self::error('Add Cau Hoi in Recycle false!');
            return redirect()->route('CauHoiRoute');
        
        }
        $cauhoi->delete();
        self::success('+1 Cau Hoi in Recycle');
        return redirect()->route('CauHoiRoute');
    }

    //Hiển thị các câu hỏi đã xóa
    public function ThungRac()
    {
        //Tìm Câu hỏi đã xóa
        $cauhoi = cau_hoi::onlyTrashed()
                    ->orderBy('deleted_at', 'desc')->get();

        return view('ThungRacCauHoi',['cauhoidaxoa'=>$cauhoi]);
    }


    //Khôi phục câu hỏi đã xóa
    public function KhoiPhuc($id)
    {
        $cauhoi = cau_hoi::withTrashed()
                    ->where('id','=',$id)
                    ->restore();

        self::success('Restore success');
        return redirect()->route('ThungRacCauHoiRoute');
    }

    //Xóa vĩnh viễn
    public function Xoa($id)
    {

        $cauhoi = cau_hoi::where('id',$id)->forceDelete();
        self::success('Deleted success');
                    
        return redirect()->route('ThungRacCauHoiRoute');
    }

}
