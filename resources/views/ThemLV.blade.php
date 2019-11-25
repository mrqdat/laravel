@extends('layout')
@section('content')
        <div class="card-header">
            <strong>Thêm mới lĩnh vực</strong>
        </div>
        <form action="{{route('ThemMoiLinhVucRoute')}}" method="POST">
            @csrf
            <div class="card-body card-block">
                <div class="has-success form-group">
                    <label for="inputIsValid" class=" form-control-label">Nhập tên lĩnh vực</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="TenLV">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Thêm
                </button>
            </div>
        </form>
@endsection