<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>
    <div class="login-page">
        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info d-flex align-items-center">
                            <div class="content">
                                <div class="logo">
                                    <h1 style="margin-left: 144px;">Đăng Nhập</h1>
                                </div>
                                <p style="margin-left: 183px;">Quản Lý Nhân Sự</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form d-flex align-items-center">
                            <div class="content">
                                <form action="{{route('checkLogin')}}" method="post" class="form-validate mb-4">
                                    {{@csrf_field()}}
                                    <div class="form-group">
                                        <input id="login-username" type="email" name="email" required
                                            data-msg="Please enter your username" class="input-material">
                                        <label for="login-username" class="label-material">Email</label>
                                    </div>
                                    <div class="form-group">
                                        <input id="login-password" type="password" name="password" required
                                            data-msg="Please enter your password" class="input-material">
                                        <label for="login-password" class="label-material">Password</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form><small>Do not have an account? </small><a href="{{route('register')}}"
                                    class="signup">Signup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
</body>

</html>