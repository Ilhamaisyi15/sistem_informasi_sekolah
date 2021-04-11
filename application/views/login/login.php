<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SMP Pangeran Diponegoro | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('asset/login') ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('asset/login') ?>/bower_components/font-awesome/css/font-awesome.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('asset/login') ?>/bower_components/Ionicons/css/ionicons.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('asset/login') ?>/dist/css/AdminLTE.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('asset/login') ?>/plugins/iCheck/square/blue.css" />
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />
    <style>
        .h1,
        h1 {
            font-size: 60px;
            text-align: center;
            color: darkblue;
            /* margin-top: 20px; */
            font-style: unset;
            margin-top: 5px;

        }

        .h2,
        h2 {
            font-size: 50px;
            text-align: center;
            color: darkblue;
            margin-bottom: 30px;

        }

        .login-logo p {
            font-style: unset;
            font-size: 40px;
            color: darkblue;
            margin-top: 0px;
        }

        .img,
        img {
            margin-left: 510px;
            margin-top: 10px;
        }


        body {
            background-image: url(img/gambar1.png);
            background-color: lightblue;
        }

        .login-box,
        login-box body {
            margin-top: 0px;
            flex-basis: 400px;
            padding: 0px;
        }

        .col-6,
        col-6 {
            margin-top: 10px;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div style="width: 100%;">
                    <img class="card-img-top" src="<?= base_url('asset/template_user/'); ?>assets/img/team/logo_dipo.png" width="150" height="120" class="img-fluid rounded " alt="">
                </div>
            </div>
            <div class="col-6">
                <h1 class="text-white">SMP</h1>
                <div class="login-logo">
                    <p>Pangeran Diponegoro</p>
                </div>
            </div>
        </div>

        <div class="login-box">
            <div class="login-logo">
                <?= $this->session->userdata('message');  ?>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Masuk untuk memulai sesi anda</p>
                <form action="<?= base_url('Auth/index');  ?>" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" name="email" class="form-control" placeholder="Email" />
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password" />
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">
                                Sign In
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
                <a href="<?= base_url('Auth/tambahDataUser/'); ?>" class="text-center">Daftar Keanggotaan Baru</a>
            </div>
            <!-- /.login-box-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="<?= base_url('asset/login') ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('asset/login') ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url('asset/login') ?>/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $("input").iCheck({
                checkboxClass: "icheckbox_square-blue",
                radioClass: "iradio_square-blue",
                increaseArea: "20%" /* optional */ ,
            });
        });
    </script>
</body>

</html>