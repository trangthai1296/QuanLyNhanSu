@include('Layouts.sidebar')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="page-container">
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    <div class="header-button">
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">
                                <div class="content" style="margin-left:850px;">
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
    </header>

    <div class="container emp-profile" style="margin-top:134px">
        <form method="post">
            <div class="row">
                <div class="col-md-8" style="margin-left:267px;">
                    <h3 style="margin-left:177px;font-family: fangsong">Profile</h3>
                    <br>
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>User Id</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{Auth::user()->id}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{Auth::user()->name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{Auth::user()->email}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Role</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{Auth::user()->role_id}}</p>
                                </div>
                            </div>
                            <button style="background: #00a1ff;color: #fff;margin-left:177px">Edit Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @include('Layouts.footer')