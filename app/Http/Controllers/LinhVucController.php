<?php

namespace App\Http\Controllers;
use App\Components\Notification;

use Illuminate\Http\Request;
use App\Linh_Vuc;

class LinhVucController extends Controller
{
    use Notification;

    public function LayDataLinhVuc(){
        $listLinhVuc = Linh_Vuc::all();
        return view('tableLinhVuc',['tenLinhVuc' => $listLinhVuc]);
    }

    public function ThemDataLinhVuc(Request $req){

        //lấy dữ liệu từ input
        $tenlv = $req->TenLV;

        //thêm mới lĩnh vực
        Linh_Vuc::create(['ten_linh_vuc'=>$tenlv]);
        self::success('Add success');
        return redirect()->route('LinhVucRoute');

    }

    public function TimLinhVuc($id){

        //lấy lĩnh vực để hiển thị lên Drop-down
        $linhvuc = Linh_Vuc::find($id);

        //truyền biến $linhvuc qua SuaLinhVuc.blade.php với tên 'linhvucfind'
        return view('SuaLinhVuc',['linhvucfind'=>$linhvuc]);
    }

    //Cập nhật lĩnh vực
    public function CapNhatLinhVuc($id, Request $req){
        $linhvuc = Linh_Vuc::find($id);

        if($linhvuc == null){
            self::error('Update failed');
        }
        else{
            $linhvuc->update(['ten_linh_vuc'=>$req->TenLV]);
            self::success('Update success');
            return redirect()->route('LinhVucRoute');
        }
    }

    public function XoaLinhVuc($id){
        $linhvuc = Linh_Vuc::find($id);
        
        if($linhvuc == null){
            self::error('Add Linh Vuc in Recycle');
            return redirect()->route('LinhVucRoute');
        
        }
        $linhvuc->delete();
        self::success('+1 Linh Vuc in Recycle');
        return redirect()->route('LinhVucRoute');
    }

    //Thùng rác 
    public function ThungRac()
    {
        //Tìm lĩnh vực đã xóa
        $linhvuc = Linh_Vuc::onlyTrashed()
                    ->orderBy('deleted_at', 'desc')->get();

        return view('ThungRacLinhVuc',['linhvucdaxoa'=>$linhvuc]);
    }

    //Khôi phục khi đã xóa
    public function KhoiPhuc($id)
    {
        $linhvuc = Linh_Vuc::withTrashed()
                    ->where('id','=',$id)
                    ->restore();

        self::success('Restore success');
        return redirect()->route('ThungRacLVRoute');
    }

    //Xóa vĩnh viễn
    public function Xoa($id)
    {

        $linhvuc = Linh_Vuc::where('id',$id)->forceDelete();
        self::success('Deleted success');
                    
        return redirect()->route('ThungRacLVRoute');
    }
}
