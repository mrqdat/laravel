@extends('layout')
@section('content')
        <div class="card-header">
            <strong>Sửa gói credit</strong>
        </div>
        <form action="{{route('CapNhatGoiCreditRoute',["id"=>$goicreditfind->id])}}" method="POST">
            @csrf
            <div class="card-body card-block">
                <div class="has-success form-group">
                    <label for="inputIsValid" class=" form-control-label">Tên gói</label>
                <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="tengoi" value="{{$goicreditfind->ten_goi}}">
                    <label for="inputIsValid" class=" form-control-label">số Credit</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="socredit" value="{{$goicreditfind->credit}}">
                    <label for="inputIsValid" class=" form-control-label">Số tiền</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="sotien" value="{{$goicreditfind->so_tien}}">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-wrench"></i> Cập nhật
                </button>
            </div>
        </form>
@endsection