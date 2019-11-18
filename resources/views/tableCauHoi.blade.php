@extends('layout')
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Quản lý câu hỏi</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{Route('indexpage')}}">Trang chủ</a></li>
                        <li class="active">Quản lý câu hỏi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Câu hỏi</strong>
                        </div>
                        <div class="card-body">
                            <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="bootstrap-data-table-export_length">
                                        <a href="{{route('ThemCauHoiRoute')}}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                            <label>Tìm kiếm:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table-export"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="white-space:nowrap">ID</th>
                                        <th class="sorting" style="white-space:nowrap" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Nội dung</th>
                                        <th class="sorting" style="white-space:nowrap" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Đáp án</th>
                                        <th class="sorting" style="white-space:nowrap" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Lĩnh vực</th>
                                        <th class="sorting" style="white-space:nowrap" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Loại</th>
                                        <th class="sorting" style="white-space:nowrap" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Phương án A</th>
                                        <th class="sorting" style="white-space:nowrap" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Phương án B</th>
                                        <th class="sorting" style="white-space:nowrap" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Phương án C</th>
                                        <th class="sorting" style="white-space:nowrap" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Phương án D</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($noidung as $item)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$item->id}}</td>
                                        <td>{{$item->noi_dung}}</td>
                                        <td>{{$item->dap_an}}</td>
                                        <td>{{$item->LayLinhVuc->ten_linh_vuc}}</td>
                                        <td>{{$item->loai}}</td>
                                        <td>{{$item->phuong_an_A}}</td>
                                        <td>{{$item->phuong_an_B}}</td>
                                        <td>{{$item->phuong_an_C}}</td>
                                        <td>{{$item->phuong_an_D}}</td>
                                        <td><a href="{{Route('SuaCauHoiRoute',["id"=>$item->id])}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-wrench"></i>
                                        </a></td>
                                    <td><a href="{{route('XoaCauHoi',["id"=>$item->id])}}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i>
                                        </a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection