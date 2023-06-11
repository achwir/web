<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= site_url('assets/assets/images/favicon.png') ?>">
    <title><?= $title ?></title>
    <!-- Custom CSS -->
    <link href="<?= site_url('assets/dist/css/style.min.css') ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background-color:DeepSkyBlue;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(<?= site_url('assets/assets/images/big/inventory.jpg') ?>);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="<?= site_url('assets/assets/images/big/icon-login.png') ?>" alt="wrapkit">
                        </div>

                        <?php if($this->session->flashdata('gagal')): ?>
                            <h4 class="text-danger">
                                <?= $this->session->flashdata('gagal') ?>
                            </h4>
                        <?php endif ?>

                        <?php if($this->session->flashdata('sukses')): ?>
                            <h4 class="text-primary">
                                <?= $this->session->flashdata('sukses') ?>
                            </h4>
                        <?php endif ?>

                        <h2 class="mt-3 text-center">Sign In</h2>
                        <p class="text-center">Silahkan Masukkan Username dan Password</p>
                        <form class="mt-4" action="<?= base_url('login/proses') ?>" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="uname">Username</label>
                                        <input class="form-control" id="uname" type="text"
                                            placeholder="enter your username" name="username">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd">Password</label>
                                        <input class="form-control" id="pwd" type="password" name="password"
                                            placeholder="enter your password">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-success">Sign In</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?= site_url('assets/assets/libs/jquery/dist/jquery.min.js') ?> "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= site_url('assets/assets/libs/popper.js/dist/umd/popper.min.js') ?> "></script>
    <script src="<?= site_url('assets/assets/libs/bootstrap/dist/js/bootstrap.min.js') ?> "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>