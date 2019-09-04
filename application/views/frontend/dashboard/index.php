
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
            <a href="javascript:void(0)" class="btn btn-primary rounded">Login / Daftar</a>
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
                            <h1 class="heading mb-3">PIAUD <span class="text-primary">Ceria Anak Mandiri</span> </h1>
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

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title">
                    <h4 class="title mb-4">Speed up your development <br> with <span class="text-primary">Landrick.</span></h4>
                    <p class="text-muted">Using Landrick to build your site means never worrying about designing another page or cross browser compatibility. Our ever-growing library of components and pre-designed layouts will make your life easier.</p>
                    <ul class="list-unstyled feature-list text-muted">
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Digital Marketing Solutions for Tomorrow</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Our Talented & Experienced Marketing Agency</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Create your own skin to match your brand</li>
                    </ul>
                    <a href="javascript:void(0)" class="mt-3 text-primary">Find Out More <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-6 order-1 order-md-2">
                <div class="p-4 rounded bg-white feature-form border ml-lg-5">
                    <img src="<?= base_url() ?>assets/frontend/images/illustrator/Mobile_notification_SVG.svg" alt="">

                    <div class="content mt-4 pt-2">
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Name : <span class="text-danger">*</span></label>
                                        <i class="mdi mdi-account ml-3 icons"></i>
                                        <input type="text" class="form-control pl-5" placeholder="Name" name="name" required="">
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Email : <span class="text-danger">*</span></label>
                                        <i class="mdi mdi-email ml-3 icons"></i>
                                        <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Password : <span class="text-danger">*</span></label>
                                        <i class="mdi mdi-key ml-3 icons"></i>
                                        <input type="password" class="form-control pl-5" placeholder="Password" required="">
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12 mt-3 mb-0">
                                    <button class="btn btn-primary rounded w-100">Download</button>
                                </div><!--end col-->
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- How It Work End -->

<!-- Testi Start -->
<section class="section pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-60">
                    <h4 class="main-title mb-4">Our Happy Customers</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-12">
                <div id="customer-testi" class="owl-carousel">
                    <div class="customer-testi mr-2 ml-2 text-center p-4 rounded border">
                        <img src="<?= base_url() ?>assets/frontend/images/client/1.png" alt="">
                        <p class="text-muted mt-4">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                        <h6 class="text-primary">- Thomas Israel</h6>
                    </div>

                    <div class="customer-testi mr-2 ml-2 text-center p-4 rounded border">
                        <img src="<?= base_url() ?>assets/frontend/images/client/2.png" alt="">
                        <p class="text-muted mt-4">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                        <h6 class="text-primary">- Carl Oliver</h6>
                    </div>

                    <div class="customer-testi mr-2 ml-2 text-center p-4 rounded border">
                        <img src="<?= base_url() ?>assets/frontend/images/client/3.png" alt="">
                        <p class="text-muted mt-4">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                        <h6 class="text-primary">- Barbara McIntosh</h6>
                    </div>

                    <div class="customer-testi mr-2 ml-2 text-center p-4 rounded border">
                        <img src="<?= base_url() ?>assets/frontend/images/client/4.png" alt="">
                        <p class="text-muted mt-4">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                        <h6 class="text-primary">- Jill Webb</h6>
                    </div>

                    <div class="customer-testi mr-2 ml-2 text-center p-4 rounded border">
                        <img src="<?= base_url() ?>assets/frontend/images/client/5.png" alt="">
                        <p class="text-muted mt-4">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                        <h6 class="text-primary">- Dean Tolle</h6>
                    </div>

                    <div class="customer-testi mr-2 ml-2 text-center p-4 rounded border">
                        <img src="<?= base_url() ?>assets/frontend/images/client/6.png" alt="">
                        <p class="text-muted mt-4">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                        <h6 class="text-primary">- Christa Smith</h6>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Testi End -->

<!-- Pricing Start -->
<section class="section">
    <div class="container">
        <div class="row mt-lg-4 align-items-center">
            <div class="col-lg-5 col-md-12 text-center text-lg-left">
                <div class="section-title mb-60">
                    <h4 class="main-title mb-4">Our Comfortable Rates</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    <a href="#" class="btn btn-primary rounded mt-4">Buy Now</a>
                </div>
            </div><!--end col-->

            <div class="col-lg-7 col-md-12">
                <div class="row align-items-center ml-lg-5">
                    <div class="col-md-6 col-12 pl-md-0 pr-md-0">
                        <div class="pricing-rates starter-plan shadow bg-white pt-5 pb-5 p-4 rounded text-center">
                            <h2 class="title text-uppercase text-primary mb-4">Starter</h2>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h4 mb-0 mt-2">$</span>
                                <span class="price display-4 mb-0">39</span>
                                <span class="h4 align-self-end mb-1">/mo</span>
                            </div>

                            <ul class="feature list-unstyled pl-0">
                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Full Access</li>
                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Source Files</li>
                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Free Appointments</li>
                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Enhanced Security</li>
                            </ul>
                            <a href="javascript:void(0)" class="btn btn-primary rounded mt-4">Get Started</a>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0 pl-md-0 pr-md-0">
                        <div class="pricing-rates bg-light pt-5 pb-5 p-4 rounded text-center">
                            <h2 class="title text-uppercase mb-4">Professional</h2>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h4 mb-0 mt-2">$</span>
                                <span class="price display-4 mb-0">59</span>
                                <span class="h4 align-self-end mb-1">/mo</span>
                            </div>

                            <ul class="feature list-unstyled pl-0">
                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Full Access</li>
                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Enhanced Security</li>
                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Source Files</li>
                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>1 Domain Free</li>
                            </ul>
                            <a href="javascript:void(0)" class="btn btn-primary rounded mt-4">Try It Now</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <div class="container-fluid">
        <div class="row">
            <div class="home-shape-bottom">
                <img src="<?= base_url() ?>assets/frontend/images/shapes/shape-light.png" alt="" class="img-fluid mx-auto d-block">
            </div>
        </div><!--end row-->
    </div> <!-- END CONTAINER -->
</section><!--end section-->
<!-- Pricing End -->

<!-- FAQ n Contact Start -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="faq-container">
                    <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> How our <span class="text-primary">Landrick</span> work ?</h4>
                    <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts.</p>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="faq-container">
                    <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> What is the main process open account ?</h4>
                    <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact</p>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="faq-container">
                    <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> How to make unlimited data entry ?</h4>
                    <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.</p>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="faq-container">
                    <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> Is <span class="text-primary">Landrick</span> safer to use with my account ?</h4>
                    <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row mt-md-5 pt-md-3 mt-4 pt-2 mt-sm-0 pt-sm-0 justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="main-title mb-4">Have Question ? Get in touch!</h4>
                    <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    <a href="javascript:void(0)" class="btn btn-primary rounded mt-4">Contact us <i class="mdi mdi-arrow-right"></i></a>
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
                <a class="logo-footer" href="#">Landrick<span class="text-primary">.</span></a>
                <p class="mt-4">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                <ul class="list-unstyled social-icon social mb-0 mt-4">
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                </ul><!--end icon-->
            </div><!--end col-->

            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h4 class="text-light footer-head">Company</h4>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Aboutus</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Services</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Team</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Pricing</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Features</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> FAQ</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Blog</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Login</a></li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h4 class="text-light footer-head">Usefull Links</h4>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Privacy Protection</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Safe Payments</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Terms of Services</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Documentation</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Privacy Policy</a></li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h4 class="text-light footer-head">Newsletter</h4>
                <p class="mt-4">Sign up and receive the latest tips via email.</p>
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="foot-subscribe form-group position-relative">
                                <label>Write your email <span class="text-danger">*</span></label>
                                <i class="mdi mdi-email ml-3 icons"></i>
                                <input type="email" name="email" id="emailsubscribe" class="form-control pl-5 rounded" placeholder="Your email : " required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="submit" id="submitsubscribe" name="send" class="btn btn-primary rounded w-100" value="Subscribe">
                        </div>
                    </div>
                </form>
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
                    <p class="mb-0">© 2019 Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by Shreethemes.</p>
                </div>
            </div>

            <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <ul class="list-unstyled payment-cards text-sm-right mb-0">
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="<?= base_url() ?>assets/frontend/images/payments/american-ex.png" title="American Express" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="<?= base_url() ?>assets/frontend/images/payments/discover.png" title="Discover" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="<?= base_url() ?>assets/frontend/images/payments/master-card.png" title="Master Card" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="<?= base_url() ?>assets/frontend/images/payments/paypal.png" title="Paypal" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="<?= base_url() ?>assets/frontend/images/payments/visa.png" title="Visa" alt=""></a></li>
                </ul>
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