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
    public function LayLinhVuc(){
        $listLinhVuc = Linh_Vuc::all();
        return view('ThemCH',['tenLinhVuc' => $listLinhVuc]);
    }
    public function FormThemCauHoi(){
        $listLinhVuc = Linh_Vuc::all();
        return view('ThemCH',['tenLinhVuc' => $listLinhVuc]);
    }
    public function ThemDataCauHoi(Request $req){
        $noidung = $req->Noidung;
        $dapan = $req->Dapan;
        $idlv = $req->IdLV;
        $loai = $req->Loai;
        $pa = $req->PaA;
        $pb = $req->PaB;
        $pc = $req->PaC;
        $pd = $req->PaD;
        
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

    public function TimCauHoi($id)
    {
        $listLinhVuc = Linh_Vuc::all();
        $cauhoi = cau_hoi::find($id);
        return view('SuaCauHoi',
            ['cauhoifind'=>$cauhoi,
            'tenLinhVuc'=>$listLinhVuc
            ]);
    }

    public function CapNhatCauHoi($id, Request $req){
        $cauhoi = cau_hoi::find($id);

        if($cauhoi == null){
            self::error('Update failed');
        }
        else{
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
    
    public function XoaDataCauHoi($id){
        $cauhoi = cau_hoi::find($id);
        
        if($cauhoi == null){
            self::error('Deleted failed');
            return redirect()->route('CauHoiRoute');
        
        }
        $cauhoi->delete();
        self::success('Deleted success');
        return redirect()->route('CauHoiRoute');
    }
}
