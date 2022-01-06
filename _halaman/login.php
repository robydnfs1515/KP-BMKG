<?php
$judul = 'Login';

$setTemplate = false;
?>


<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
    <?php include '_layouts/head.php' ?>
    <link rel="stylesheet" href="<?= templates() ?>plugins/iCheck/square/blue.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>LOGIN</b> SISTEM KEPEGAWAIAN <b>BMKG</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Masuk untuk memulai sesi Anda</p>
            <form method="post">
                <label>Username</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="USERNAME" placeholder="Nama Pengguna">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <label>Password</label>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="PASSWORD" placeholder="Kata Sandi Pengguna">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
</body>
<?php
include '_layouts/javascript.php';
?>
<script src="<?= templates() ?>plugins/iCheck/icheck.min.js"></script>
<script>
$(function() {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
    });
});
</script>

</html>