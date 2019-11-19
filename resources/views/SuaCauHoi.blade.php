@extends('layout')
@section('content')
        <div class="card-header">
            <strong>Cập nhật câu hỏi</strong>
        </div>
        <form action="{{route('CapNhatCauHoiRoute',["id"=>$cauhoifind->id])}}" method="POST">
            @csrf
            <div class="card-body card-block">
                <div class="has-success form-group">
                    <label for="inputIsValid" class=" form-control-label">Nội dung</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="Noidung" value="{{$cauhoifind->noi_dung}}">
                    <label for="inputIsValid" class=" form-control-label">Đáp án</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="Dapan" value="{{$cauhoifind->dap_an}}">
                    <label for="inputIsValid" class=" form-control-label">Chọn lĩnh vực</label>
                    <div class="row form-group">
                            <div class="col-12 col-md-12">
                                <select name="IdLV" id="select" class="form-control">
                                    @foreach ($tenLinhVuc as $item)
                                     <option value="{{$item->id}}">{{$item->ten_linh_vuc}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    <label for="inputIsValid" class=" form-control-label">Loại</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="Loai"  value="{{$cauhoifind->loai}}">
                    <label for="inputIsValid" class=" form-control-label">Phương án A</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="PaA" value="{{$cauhoifind->phuong_an_A}}">
                    <label for="inputIsValid" class=" form-control-label">Phương án B</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="PaB" value="{{$cauhoifind->phuong_an_B}}">
                    <label for="inputIsValid" class=" form-control-label">Phương án C</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="PaC" value="{{$cauhoifind->phuong_an_C}}">
                    <label for="inputIsValid" class=" form-control-label">Phương án D</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="PaD" value="{{$cauhoifind->phuong_an_D}}">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-wrench"></i> Cập nhật
                </button>
            </div>
        </form>
@endsection