
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Sistem Informasi Pendaftaran Siswa PIAUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Shreethemes" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="<?= base_url() ?>assets/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="<?= base_url() ?>assets/frontend/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Slider -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/owl.theme.css"/>
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/owl.transitions.css"/>
    <!-- Main css -->
    <link href="<?= base_url() ?>assets/frontend/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
<!-- Loader -->
<!--<div id="preloader">-->
<!--    <div id="status">-->
<!--        <div class="spinner">-->
<!--            <div class="double-bounce1"></div>-->
<!--            <div class="double-bounce2"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- Loader -->

<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="#">Sipensi<span class="text-primary">.</span></a>
        </div>
        <div class="buy-button">
            <a href="<?= base_url() ?>login" class="btn btn-primary ">Login / Daftar</a>
        </div><!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li><a href="<?= base_url() ?>profile">Profile</a></li>
                <li><a href="<?= base_url() ?>visimisi">Visi dan Misi</a></li>
            </ul>
        </div>
    </div>
</header>
<!-- Navbar End -->