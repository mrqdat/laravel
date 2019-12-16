@extends('layout')
@section('content')
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="bootstrap-data-table-export_length">
                <a href="{{route('CauHoiRoute')}}">
                    <div class="icon-container">
                        <span class="ti-angle-left"></span>
                        <span class="icon-name">Quản lý câu hỏi</span>
                    </div> 
                    </a>
                </div>
            </div>
        </div>
        <div class="card-header">
            <strong>Thêm mới câu hỏi</strong>
        </div>
        <form action="{{route('ThemMoiCauHoiRoute')}}" method="POST">
            @csrf
            <div class="card-body card-block">
                <div class="has-success form-group">
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" pattern="[^.!@#$%^&*()]{2,200}" title="Không chứa các ký tự đặc biệt và độ dài từ 2 ký tự" placeholder="Nội dung" name="Noidung">
                    <br>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" pattern="{2,200}" title="Độ dài từ 2-200 ký tự" placeholder="Đáp án" name="Dapan">
                    <br>
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
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" placeholder="Loại" pattern="{2,50}" title="Độ dài từ 2 ký tự" name="Loai"><br>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" placeholder="Phương án A" name="PaA"><br>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" placeholder="Phương án B" name="PaB"><br>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" placeholder="Phương án C" name="PaC"><br>
                    <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" placeholder="Phương án D" name="PaD"><br>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Thêm
                </button>
            </div>
        </form>
@endsection