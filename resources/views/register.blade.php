<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
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
                                    <h1 style="margin-left: 170px;">Đăng Kí</h1>
                                </div>
                                <p style="margin-left: 176px;">Quản Lý Nhân Sự</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 bg-white">
                        <div class="form d-flex align-items-center">
                            <div class="content">
                                <form action="{{route('checkRegister')}}" method="post" class="text-left form-validate">
                                    {{@csrf_field()}}
                                    <div class="form-group-material">
                                        <input id="register-username" type="text" name="name" required
                                            data-msg="Please enter your username" class="input-material">
                                        <label for="register-username" class="label-material">Username</label>
                                    </div>
                                    <div class="form-group-material">
                                        <input id="register-email" type="email" name="email" required
                                            data-msg="Please enter a valid email address" class="input-material">
                                        <label for="register-email" class="label-material">Email Address</label>
                                    </div>
                                    <div class="form-group-material">
                                        <input id="register-password" type="password" name="password" required
                                            data-msg="Please enter your password" class="input-material">
                                        <label for="register-password" class="label-material">Password</label>
                                    </div>
                                    <div class="form-group-material">
                                        <input id="register-password" type="text" name="role_id" required
                                            data-msg="Please enter your role" class="input-material">
                                        <label for="register-password" class="label-material">Role</label>
                                    </div>
                                    <div class="form-group text-center">
                                        <input id="register" type="submit" value="Register" class="btn btn-primary">
                                    </div>
                                </form><small>Already have an account? </small><a href="{{route('login')}}"
                                    class="signup">Login</a>
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