
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
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html">Profile</a></li>
                <li><a href="index.html">Visi dan Misi</a></li>
            </ul>
        </div>
    </div>
</header>
<!-- Navbar End -->

<!-- Hero Start -->
<section class="bg-half-170" id="home">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7">
                        <div class="title-heading mt-4">
                            <h1 class="heading mb-3">TK/KB <span class="text-primary">Ceria Anak Mandiri</span> </h1>
                            <p class="para-desc text-muted">Pendaftaran online siswa PIAUD Ceria Anak Mandiri.</p>
                            <div class="mt-4 pt-2">
                                <a href="<?= base_url() ?>login" class="btn btn-primary-outline rounded mt-2 mr-2">Daftar Sekarang !</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <img src="<?= base_url() ?>assets/frontend/images/dashboard.svg" alt="" width="420" height="420">
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div><!--end home desc center-->
    </div><!--end home center-->
</section><!--end section-->
<!-- Hero End -->



<!-- How It Work Start -->
<section class="section bg-light border-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-60">
                    <h4 class="main-title mb-4">Langkah Pendaftaran ?</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Langkah <span class="text-primary font-weight-bold">Pendaftaran Online</span> melalui sistem.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <img src="<?= base_url() ?>assets/frontend/images/form.svg" alt="" width="430" height="430">
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title ml-lg-5">
                    <h4 class="title mb-4">Berikut Langkah Langkah Pendaftaran</h4>
                    <p class="text-muted"></p>
                    <ul class="list-unstyled feature-list text-muted">
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Orang Tua <a
                                    href="<?= base_url() ?>register">mendaftarkan</a> akun mereka.</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Login dan klik menu pendaftar.</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Isi form pendaftaran dan biodata calon peserta didik, dan klik daftar</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Lengkapi persyaratan pendaftaran.</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Lakukan pembayaran.</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Menunggu konfirmasi <span class="text-success">diterima</span> / <span class="text-danger">ditolak</span>    .</li>
                    </ul>
                    <a href="<?= base_url() ?>login" class="mt-3 text-primary">Daftarkan Anak Anda <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

</section><!--end section-->
<!-- How It Work End -->




<!-- FAQ n Contact Start -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Visi</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur culpa numquam placeat temporibus!
                Alias autem beatae doloribus eaque eum rem, reprehenderit temporibus tenetur vitae? Amet illo iusto minus sequi.
            </div>
            <div class="col-md-6">
                <h4>Misi</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto aspernatur, atque beatae consequatur dolore doloremque eligendi,
                exercitationem harum magnam magni nam odit perferendis quas quibusdam quos recusandae vitae, voluptate!
            </div>
        </div><!--end row-->

        <div class="row mt-md-5 pt-md-3 mt-4 pt-2 mt-sm-0 pt-sm-0 justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="main-title mb-4">Punya Pertanyaan ?</h4>
                    <p class="text-muted para-desc mx-auto">Dapat menghubungi kami di <span class="text-primary font-weight-bold">ceriaMandiri@digtive.id</span> </p>

                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <div class="container-fluid">
        <div class="row">
            <div class="home-shape-bottom">
                <img src="<?= base_url() ?>assets/frontend/images/shapes/shape-dark.png" alt="" class="img-fluid mx-auto d-block">
            </div>
        </div><!--end row-->
    </div> <!-- END CONTAINER -->
</section><!--end section-->
<!-- FAQ n Contact End -->

<!-- Footer Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                <a class="logo-footer" href="#">Sipensi<span class="text-primary">.</span></a>
                <p class="mt-4">Sipensi adalah sistem pendaftaran online siswa PIAUD berbasis online.</p>
                <ul class="list-unstyled social-icon social mb-0 mt-4">
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                </ul><!--end icon-->
            </div><!--end col-->

            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">

            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">

            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h4 class="text-light footer-head">Contact Us</h4>
                <p class="mt-4">Hubungi kami di <br> +628 22 6828 3370.</p>

            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<hr>
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="text-sm-left">
                    <p class="mb-0">© 2019 Digtive. Design with <i class="mdi mdi-heart text-danger"></i> by BangJay.</p>
                </div>
            </div>

        </div>
    </div><!--end container-->
</footer><!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a href="#" class="back-to-top rounded text-center" id="back-to-top">
    <i class="mdi mdi-chevron-up d-block"> </i>
</a>
<!-- Back to top -->

<!-- javascript -->
<script src="<?= base_url() ?>assets/frontend/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/js/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/js/scrollspy.min.js"></script>
<!-- SLIDER -->
<script src="<?= base_url() ?>assets/frontend/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/js/owl.init.js"></script>
<!-- Main Js -->
<script src="<?= base_url() ?>assets/frontend/js/app.js"></script>
</body>


</html>