<?php
include '../lib/session.php';
Session::checkSession();
?>

<?php
include '../lib/database.php';
include '../helpers/format.php';

spl_autoload_register(function ($class) {
    include_once '../classes/' . $class . ".php";
});

$db = new Database();
$fm = new Format();

$managStaff = new managStaff();
$carcompany = new carcompany();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>HỆ THỐNG DOANH NGHIỆP</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon icon -->
    <link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="./assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="./assets/plugins/animation/css/animate.min.css">

    <!-- Data table -->
    <link rel="stylesheet" href="./assets/plugins/datatable/datatables.min.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.16.2/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menupos-fixed menu-light brand-blue">
        <div class="navbar-wrapper ">
            <div class="navbar-brand header-logo">
                <a href="?q=homepage" class="b-brand" style="color: white;">
                    <img class="rounded-circle" src="./assets/images/logo.png" style="width: 50px; height: 50px;" alt="" class="logo images">
                    <img src="./assets/images/logo.png" style="width: 30px; height: auto;" alt="" class="logo-thumb images rounded-circle">
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            </div>
            <div class="navbar-content scroll-div ps ps--active-y">
                <ul class="nav pcoded-inner-navbar" id="myList">
                    <!-- Trang chủ -->
                    <li class="nav-item pcoded-menu-caption">
                        <label>Thao tác chung</label>
                    </li>
                    <li class="nav-item">
                        <a href="?q=homepage" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Trang chủ</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Thao tác quản lý</label>
                    </li>

                    <?php if (Session::get('level') == "0") { ?>
                        <li class="nav-item">
                            <a href="?q=staff" class="nav-link"><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Quản lý nhân sự</span></a>
                        </li>
                    <?php } ?>

                    <?php if (Session::get('level') < 2) { ?>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-list"></i></span><span class="pcoded-mtext">Quản lý sản phẩm</span></a>
                            <ul class="pcoded-submenu">
                                <li><a href="?q=product">Danh mục sản phẩm</a></li>
                                <li><a href="?q=carcompany">Danh mục hãng xe</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                    <!-- quản lí khách hàng -->
                    <?php if (Session::get('level') == "0") { ?>
                        <li class="nav-item">
                            <a href="?q=customer" class="nav-link"><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Quản lý khách hàng</span></a>
                        </li>
                    <?php } ?>

                    <?php if (Session::get('level') == "0") { ?>
                        <li class="nav-item">
                            <a href="?q=contract" class="nav-link"><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Quản lý hợp đồng</span></a>
                        </li>
                    <?php } ?>


                    <?php if (Session::get('level') < 2) { ?>
                        <li class="nav-item">
                            <a href="?q=driver" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Quản lý đăng kí</span></a>
                        </li>
                    <?php } ?>

                    <!-- Thao tác khác -->
                    <li class="nav-item pcoded-menu-caption">
                        <label>Thao tác khác</label>
                    </li>
                    <li class="nav-item">
                        <a href="?q=changepassword" class="nav-link"><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Đổi mật khẩu</span></a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (isset($_GET['q']) && $_GET['q'] == 'logout') {
                            Session::destroy();
                        }
                        ?>
                        <a href="?q=logout" class="nav-link"><span class="pcoded-micon"><i class="feather icon-log-out"></i></span><span class="pcoded-mtext">Đăng xuất</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="?q=softwareinformation" class="nav-link"><span class="pcoded-micon"><i class="feather icon-alert-circle"></i></span><span class="pcoded-mtext">Thông tin phần mềm</span></a>
                    </li>
                </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 909px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 850px;"></div>
                </div>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
</body>