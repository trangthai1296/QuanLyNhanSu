@extends('layouts.master')
@section('content')
<div class="page-container">
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap" style='display: flex;justify-content: space-between;'>
                    <div>
                        <form class="form-header" action="{{route('hopDongIndex')}}" method="get">
                            <input class="au-input au-input--xl" type="text" name="search"
                                placeholder="Search" />
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
        <a class="nav-link btn btn-success create-new-button" id="create" href="{{route('hopDongCreate')}}"
            style="width:80px;height:40px;margin-left:28px">Thêm</a>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ma NV</th>
                            <th>Lương Cơ Bản</th>
                            <th>Lương Tăng Ca</th>
                            <th>Phụ Cấp</th>
                            <th>BHXH</th></th>
                            <th>Ngày BD</th>
                            <th>Ngày KT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hopdong as $i)
                        <tr>
                            <td>{{ $i->id }}</td>
                            <td>{{ $i->manhanvien }}</td>
                            <td>{{ $i->luongcoban }}</td>
                            <td>{{ $i->luongtangca }}</td>
                            <td>{{ $i->phucap }}</td>
                            <td>{{ $i->bhxh }}</td>
                            <td>{{ $i->ngaybatdau }}</td>
                            <td>{{ $i->ngayketthuc }}</td>
                            <td><a href="{{route('hopDongEdit',['id'=>$i->id])}}"><button
                                        class="badge badge-info">Sửa</button></a></td>
                            <td><a href="{{route('hopDongDelete',['id'=>$i->id])}}"><button
                                        class="badge badge-danger">Xóa</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection