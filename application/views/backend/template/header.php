<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sistem Pendaftaran Siswa Baru">
    <meta name="keywords"
          content="admin, admin template, admin panel, dashboard template, ui kits, web app, crm, cms, responsive, bootstrap 4, html, sass support, scss">
    <meta name="author" content="BangJay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Sistem Pendaftaran Siswa Baru TK</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico">


    <!-- Datepicker CSS -->
    <link href="<?= base_url() ?>assets/plugins/datepicker/datepicker.min.css" rel="stylesheet" type="text/css">

    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/animated.css" rel="stylesheet" type="text/css">
    <!-- End CSS -->
    <!-- DataTables CSS -->
    <link href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"/>

    <link href="<?= base_url() ?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>

</head>

<body class="xp-vertical">
<!-- Search Modal -->
<div class="modal search-modal fade" id="xpSearchModal" tabindex="-1" role="dialog" aria-labelledby="xpSearchModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="xp-searchbar">
                    <form>
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search" aria-label="Search"
                                   aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn" type="submit" id="button-addon2">GO</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start XP Container -->
<div id="xp-container">

    <!-- Start XP Leftbar -->
    <div class="xp-leftbar">

        <!-- Start XP Sidebar -->
        <div class="xp-sidebar">

            <!-- Start XP Logobar -->
            <div class="xp-logobar text-center">
                <a href="index.html" class="xp-logo"><img src="<?= base_url() ?>assets/images/logo.svg"
                                                          class="img-fluid" alt="logo"></a>
            </div>
            <!-- End XP Logobar -->

            <!-- Start XP Navigationbar -->
            <div class="xp-navigationbar">
                <ul class="xp-vertical-menu">
                    <li class="xp-vertical-header">Main</li>
                    <li <?php if ($this->uri->segment(3) == 'dashboard') {
                        echo 'class="active"';
                    } ?> >
                        <a href="<?= base_url() ?>dashboard">
                            <i class="icon-speedometer"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li
                        <?php if ($this->uri->segment(3) == 'pendaftar') {
                            echo 'class="active"';
                        } ?>
                    >
                        <a href="<?= base_url() ?>pendaftar">
                            <i class="fa fa-address-card-o"></i><span>Pendaftar</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('sess_level')=='psb') {?>
                    <li
                        <?php if ($this->uri->segment(3) == 'users') {
                            echo 'class="active"';
                        } ?>
                    >
                        <a href="<?= base_url() ?>users">
                            <i class="fa fa-user-circle"></i><span>Users</span>
                        </a>
                    </li>
                    <?php } ?>


                </ul>
            </div>
            <!-- End XP Navigationbar -->

        </div>
        <!-- End XP Sidebar -->

    </div>
    <!-- End XP Leftbar -->

    <!-- Start XP Rightbar -->
    <div class="xp-rightbar">

        <!-- Start XP Topbar -->
        <div class="xp-topbar">

            <!-- Start XP Row -->
            <div class="row">

                <!-- Start XP Col -->
                <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                    <div class="xp-menubar">
                        <a class="xp-menu-hamburger" href="javascript:void();">
                            <i class="icon-menu font-20 text-white"></i>
                        </a>
                    </div>
                </div>
                <!-- End XP Col -->

                <!-- Start XP Col -->
                <div class="col-10 col-md-11 col-lg-11 order-1 order-md-2">
                    <div class="xp-profilebar text-right">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="xp-search">
                                    <a href="#" class="text-white" data-toggle="modal" data-target="#xpSearchModal"><i
                                                class="icon-magnifier"></i></a>
                                </div>
                            </li>


                            <li class="list-inline-item mr-0">
                                <div class="dropdown xp-userprofile">
                                    <a class="dropdown-toggle" href="#" role="button" id="xp-userprofile"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                                src="<?= base_url() ?>assets/images/topbar/user.jpg" alt="user-profile"
                                                class="rounded-circle img-fluid"><span class="xp-user-live"></span></a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-userprofile">
                                        <a class="dropdown-item py-3 text-white text-center font-16" href="#">Welcome,
                                            <?= $this->session->userdata('sess_nama') ?></a>

                                        <a class="dropdown-item" href="#"><i
                                                    class="icon-settings text-warning mr-2"></i> Setting</a>

                                        <a class="dropdown-item" href="<?= base_url() ?>logout" onclick="return confirm('Yakin ingin keluar ?')"><i class="icon-power text-danger mr-2"></i>
                                            Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End XP Col -->

            </div>
            <!-- End XP Row -->

        </div>
        <!-- End XP Topbar -->

        <!-- Start XP Breadcrumbbar -->
        <div class="xp-breadcrumbbar">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <h4 class="xp-page-title"><?= $title ?></h4>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="xp-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Breadcrumbbar -->

        <div class="xp-contentbar">

