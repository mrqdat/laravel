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
                    <div class="card">
                            <div class="card-body">
                                <select data-placeholder="Choose a Country..." class="standardSelect" tabindex="-1" style="display: none;">
                                    <option value=""></option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                </select><div class="chosen-container chosen-container-single" title="" style="width: 100%;"><a class="chosen-single chosen-default">
                                <span>Choose a Country...</span>
                                <div><b></b></div>
                                </a>
                                <div class="chosen-drop">
                                <div class="chosen-search">
                                    <input class="chosen-search-input" type="text" autocomplete="off" tabindex="1">
                                </div>
                                <ul class="chosen-results"><li class="active-result" data-option-array-index="1">United States</li><li class="active-result" data-option-array-index="2">United Kingdom</li><li class="active-result" data-option-array-index="3">Afghanistan</li><li class="active-result" data-option-array-index="4">Aland Islands</li><li class="active-result" data-option-array-index="5">Albania</li><li class="active-result" data-option-array-index="6">Algeria</li><li class="active-result" data-option-array-index="7">American Samoa</li><li class="active-result" data-option-array-index="8">Andorra</li><li class="active-result" data-option-array-index="9">Angola</li><li class="active-result" data-option-array-index="10">Anguilla</li><li class="active-result" data-option-array-index="11">Antarctica</li></ul>
                                </div></div>
                            </div>
                        </div>
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