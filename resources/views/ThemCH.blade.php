@extends('layout')
@section('content')
        <div class="card-header">
            <strong>Thêm mới câu hỏi</strong>
        </div>
        <form action="{{route('ThemMoiCauHoiRoute')}}" method="POST">
            @csrf
            <div class="card-body card-block">
                <div class="has-success form-group">
                    <label for="inputIsValid" class=" form-control-label">Nhập nội dung</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="Noidung">
                    <label for="inputIsValid" class=" form-control-label">Nhập đáp án</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="Dapan">
                    <label for="inputIsValid" class=" form-control-label">Nhập Id lĩnh vực</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="IdLV">
                    <label for="inputIsValid" class=" form-control-label">Nhập loại</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="Loai">
                    <label for="inputIsValid" class=" form-control-label">Nhập Phương án A</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="PaA">
                    <label for="inputIsValid" class=" form-control-label">Nhập Phương án B</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="PaB">
                    <label for="inputIsValid" class=" form-control-label">Nhập Phương án C</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="PaC">
                    <label for="inputIsValid" class=" form-control-label">Nhập Phương án D</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="PaD">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Thêm
                </button>
            </div>
        </form>
@endsection