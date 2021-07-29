<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>Dashboard</title>
    <base href="{{asset('')}}">
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{route('index')}}">
                    <img src="images/icon/logo.png" alt=" Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Quản lý nhân viên</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('nhanVienIndex')}}">Nhân viên</a>
                                </li>
                                <li>
                                    <a href="{{route('phongBanIndex')}}">Phòng ban</a>
                                </li>
                                <li>
                                    <a href="{{route('chucVuIndex')}}">Chức vụ</a>
                                </li>
                                <li>
                                    <a href="{{route('hopDongIndex')}}">Hợp đồng</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Chấm công và lương</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('chamCongIndex')}}">Bảng chấm công</a>
                                </li>
                                <li>
                                    <a href="{{route('bangCongIndex')}}">Bảng công</a>
                                </li>
                                <li>
                                    <a href="{{route('tangCaIndex')}}">Tăng ca</a>
                                </li>
                                <li>
                                    <a href="{{route('bangLuongIndex')}}">Bảng lương</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Quản lý tuyển dụng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('dotTuyenDungIndex')}}">Đợt tuyển dụng</a>
                                </li>
                                <li>
                                    <a href="{{route('dotPhongVanIndex')}}">Đợt phỏng vấn</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Thống kê báo cáo</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('khenThuongIndex')}}">Khen thưởng</a>
                                </li>
                                <li>
                                    <a href="{{route('kyLuatIndex')}}">Kỷ luật</a>
                                </li>
                                <li>
                                    <a href="{{route('chiLuongIndex')}}">Chi lương</a>
                                </li>
                                <li>
                                    <a href="{{route('chiTietTuyenDungIndex')}}">Kết quả tuyển dụng</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Quản lý tài khoản</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('userIndex')}}">Người dùng</a>
                                </li>
                                <li>
                                    <a href="{{route('roleIndex')}}">Quyền truy cập</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>