<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login</title>
    <!-- Favicon-->
      <link rel="icon" type="image/png" href="img/cakra.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="administrator/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="administrator/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="administrator/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="administrator/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="card" style="border-radius:20px;">
            <div class="body">
                <div class="logo" align="center">
                    <img src="img/cakra.jpg" style="max-height:150px; width:auto;">
                </div>
                <hr style="border:5px; border-style:double; border-color:#00bcd4;margin-left: -25px;margin-right: -25px;"/>
                <form id="sign_in" action="administrator/config/proses.php?aksi=login" method="POST">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="administrator/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="administrator/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="administrator/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="administrator/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="administrator/js/admin.js"></script>
    <script src="administrator/js/pages/examples/sign-in.js"></script>
</body>

</html>