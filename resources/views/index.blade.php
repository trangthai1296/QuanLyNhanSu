@include('Layouts.sidebar')
<div class="page-container">
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    @yield('search')
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

    @include('Layouts.footer')