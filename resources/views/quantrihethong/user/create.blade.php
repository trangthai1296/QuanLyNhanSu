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
                                <form action="{{route('userStore')}}" method="post">
                                    {{@csrf_field()}}
                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class=" form-control-label">Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class=" form-control-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <!-- <div class="form-group">
                                    <label for="role_id" class=" form-control-label">Role_id</label>
                                    <input type="text" class="form-control" name="role_id">
                                </div> -->

                                    <div class="form-group">
                                        <label for="role_id">Role</label>
                                        <select type="text" class="form-control" name="role_id">
                                            @foreach ($role as $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
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