<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, admin template, admin panel, dashboard template, ui kits, web app, crm, cms, responsive, bootstrap 4, html, sass support, scss">
    <meta name="author" content="Bang Jay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Login Sistem Pendaftaran Siswa Baru</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico">

    <!-- Start CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.js"></script>
    <!-- End CSS -->

</head>

<body class="xp-vertical">
<?php if ($this->session->flashdata('alert') == 'insert') { ?>
    <script>
        Swal.fire({
            position: 'center',
            type: 'success',
            title: 'Pendaftaran berhasil',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
<?php } ?>
<?php if ($this->session->flashdata('alert') == 'error') { ?>
    <script>
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Pendaftaran gagal, silahkan coba lagi!'
        })
    </script>
<?php } ?>
<?php if ($this->session->flashdata('alert') == 'invalid') { ?>
    <script>
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Username / Password Salah, silahkan coba lagi!'
        })
    </script>
<?php } ?>

<div class="xp-authenticate-bg"></div>
<!-- Start XP Container -->
<div id="xp-container" class="xp-container">

    <!-- Start Container -->
    <div class="container">

        <!-- Start XP Row -->
        <div class="row vh-100 align-items-center">
            <!-- Start XP Col -->
            <div class="col-lg-12">

                <!-- Start XP Auth Box -->
                <div class="xp-auth-box">

                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center mt-0 m-b-15">
                                <a href="index.html" class="xp-web-logo"><img src="<?= base_url() ?>assets/images/logo.svg" height="40" alt="logo"></a>
                            </h3>
                            <div class="p-3">
                                <form action="<?= base_url() ?>login" method="POST">
                                    <div class="text-center mb-3">
                                        <h4 class="text-black">Silahkan Masuk !</h4>
                                        <p class="text-muted">Belum punya akun ? <a href="<?= base_url() ?>register">Daftar </a> Disini</p>
                                    </div>


                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-6">

                                        </div>
                                        <div class="form-group col-6 text-right">
                                            <label class="forgot-psw">

                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" name="login" class="btn btn-primary btn-rounded btn-lg btn-block">Masuk</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End XP Auth Box -->

            </div>
            <!-- End XP Col -->
        </div>
        <!-- End XP Row -->
    </div>
    <!-- End Container -->
</div>
<!-- End XP Container -->

<!-- Start JS -->



</body>

</html>