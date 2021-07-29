
@extends('layouts.master')
@section('content')
<div class="page-container">
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap" style='display: flex;justify-content: space-between;'>
                    <div>
                        <form class="form-header" action="" method="get">
                            <input class="au-input au-input--xl" type="text" name="search"
                                placeholder="Search for datas &amp; reports..." />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                    </div>
                    <div>
                        <div class="header-button">
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <h5 class="name">
                                                <a href="#">{{Auth::user()->name}}</a>
                                            </h5>
                                            <span class="email">{{Auth::user()->email}}</span>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="{{route('profile')}}">
                                                    <i class="zmdi zmdi-account"></i>Profile</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="{{route('changePassword')}}">
                                                <i class="zmdi zmdi-settings"></i>Change password</a>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="{{route('logout')}}">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Thêm mới</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="{{route('nhanVienStore')}}" method="post">
                                    {{@csrf_field()}}
                                    <div class="form-group">
                                        <label for="hoten" class=" form-control-label">Họ Tên</label>
                                        <input type="text" class="form-control" name="hoten">
                                    </div>
                                    <div class="form-group">
                                        <label for="ngaysinh" class=" form-control-label">Ngày Sinh</label>
                                        <input type="date" class="form-control" name="ngaysinh">
                                    </div>
                                    <div class="form-group">
                                        <label for="diachi" class=" form-control-label">Địa Chỉ</label>
                                        <input type="text" class="form-control" name="diachi">
                                    </div>
                                    <div class="form-group">
                                        <label for="gioitinh" class=" form-control-label">Giới Tính</label>
                                        <input type="text" class="form-control" name="gioitinh">
                                    </div>
                                    <div class="form-group">
                                        <label for="sdt" class=" form-control-label">SDT</label>
                                        <input type="text" class="form-control" name="sdt">
                                    </div>
                                    <div class="form-group">
                                        <label for="cmnd" class=" form-control-label">CMND</label>
                                        <input type="text" class="form-control" name="cmnd">
                                    </div>
                                    <div class="form-group">
                                        <label for="tinhtrang" class=" form-control-label">TinhTrang</label>
                                        <input type="text" class="form-control" name="tinhtrang">
                                    </div>
                                    <div class="form-group">
                                        <label for="hesoluong" class=" form-control-label">Hệ Số Lương</label>
                                        <input type="text" class="form-control" name="hesoluong">
                                    </div>
                                    <div class="form-group">
                                        <label for="maphongban">Phòng Ban</label>
                                        <select type="text" class="form-control" name="maphongban">
                                            @foreach ($phongban as $value)
                                            <option value="{{$value->id}}">{{$value->tenphongban}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="machucvu">Chức Vụ</label>
                                        <select type="text" class="form-control" name="machucvu">
                                            @foreach ($chucvu as $value)
                                            <option value="{{$value->id}}">{{$value->tenchucvu}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="madotphongvan">Đợt PV</label>
                                        <select type="text" class="form-control" name="madotphongvan">
                                            @foreach ($dotpv as $value)
                                            <option value="{{$value->id}}">{{$value->ten}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" name="save" class="btn btn-primary btn-sm"
                                            style="margin-left:385px;">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection