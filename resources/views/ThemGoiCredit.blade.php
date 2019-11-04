@extends('layout')
@section('content')
        <div class="card-header">
            <strong>Thêm mới gói credit</strong>
        </div>
        <form action="{{route('ThemMoiGoiCreditRoute')}}" method="POST">
            @csrf
            <div class="card-body card-block">
                <div class="has-success form-group">
                    <label for="inputIsValid" class=" form-control-label">Tên gói</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="tengoi">
                    <label for="inputIsValid" class=" form-control-label">số Credit</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="socredit">
                    <label for="inputIsValid" class=" form-control-label">Số tiền</label>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" name="sotien">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Thêm
                </button>
            </div>
        </form>
@endsection