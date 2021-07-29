@extends('layouts.master')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8" style="margin-left: 370px;">
                    <div class="card">
                        <div class="card-header">
                            <strong>Change Password</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('checkChangePassword',['id'=>Auth::user()->id])}}" method="post">
                                {{@csrf_field()}}
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="matkhaucu" class=" form-control-label">Curent Password</label>
                                    <input type="text" class="form-control" name="matkhaucu">
                                </div>
                                <div class="form-group">
                                    <label for="matkhaumoi" class=" form-control-label">New Password</label>
                                    <input type="text" class="form-control" name="matkhaumoi">
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