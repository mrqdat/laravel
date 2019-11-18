@extends('layout')
@section('content')
        <div class="card-header">
            <strong>Sửa lĩnh vực</strong>
        </div>
    <form action="{{route('CapNhatLinhVucRoute',["id"=>$linhvucfind->id])}}" method="POST">
            @csrf
            <div class="card-body card-block">
                <div class="has-success form-group">
                    <label for="inputIsValid" class=" form-control-label">Tên lĩnh vực cũ "{{$linhvucfind->ten_linh_vuc}}"</label><br>
                    <label for="inputIsValid" class=" form-control-label">Nhập tên lĩnh vực mới</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="TenLV">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-wrench"></i> Cập nhật
                </button>
            </div>
        </form>
@endsection