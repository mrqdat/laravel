@extends('layout')
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Quản lý gói Credit</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{Route('indexpage')}}">Trang chủ</a></li>
                        <li class="active">Quản lý gói Credit</li>
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
                            <strong class="card-title">Gói Credit</strong>
                        </div>
                        <div class="card-body">
                            <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="bootstrap-data-table-export_length">
                                        <a href="{{route('ThemGoiCreditRoute')}}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                           <input type="search" class="form-control form-control-sm" placeholder="Tìm Kiếm" aria-controls="bootstrap-data-table-export">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <a href="{{Route('ThungRacGoiCreditRoute')}}" class="btn btn-danger btn-sm">
                                            Thùng rác
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="white-space:nowrap">ID</th>
                                        <th class="sorting" style="white-space:nowrap" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Tên gói</th>
                                        <th class="sorting" style="white-space:nowrap" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Credit</th>
                                        <th class="sorting" style="white-space:nowrap" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Số tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($goi as $item)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$item->id}}</td>
                                        <td>{{$item->ten_goi}}</td>
                                        <td>{{$item->credit}}</td>
                                        <td>{{$item->so_tien}}</td>
                                        <td><a href="{{route('SuaGoiCreditRoute',["id"=>$item->id])}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-wrench"></i>
                                        </a></td>
                                    <td><a href="{{route('XoaGoiCreditRoute',["id"=>$item->id])}}" class="btn btn-danger btn-sm">
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