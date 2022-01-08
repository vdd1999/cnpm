<?php
require_once('conn.php');
$getProducts = getSanpham();
if ($getProducts['code'] == 0) {
    $products = $getProducts['result'];
}
$getInfo = getInfoWeb();
if ($getInfo['code'] == '0') {
  $infoWeb = $getInfo['result'];
  $info = $infoWeb->fetch_assoc();
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Huyndai">
    <meta name="author" content="DatVu">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- STYLE-->
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="index.css" type="text/css" />
</head>
<!--Header fixed-->
<header class="page-header header-fixed">
    <div class="header-wrap">
        <div class="row header-content">
            <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 header-left">
                <div class="col-lg-5 col-sm-12 col-xs-12 col-md-12 header-info">
                    <div class="header-title">
                        <a href="index.php">
                            <img src="images/logo-header.png" alt="Truck & Bus Hyundai Trường Chinh" />
                        </a>
                    </div>
                </div>
                <!-- ICON MENU -->
                <i class="fa fa-reorder icon-menu d-none" style="font-size:36px" data-toggle="collapse" data-target=".menu-collapse"></i>
                <div class="col-lg-7 col-md-7 header-menu">
                    <ul class="menu">
                        <li class="menu-item">
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li class="menu-item">
                            <a href="gioithieu.php">Giới thiệu</a>
                        </li>
                        <li class="menu-item">
                            <a href="product.php">Sản phẩm</a>
                            <ul class="sub-menu">
                                <?php
                                foreach ($products as $product) {
                                ?>
                                    <li class="sub-menu-item">
                                        <a href="chitiet.php?id=<?= $product['id'] ?>">
                                            <img src="./uploads/<?= $product['img'] ?>" alt="">
                                        </a>
                                        <span><?= $product['tensp'] ?></span>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="menu-item">Liên hệ</li>
                        <li class="menu-item">Xưởng thùng</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 social-network">
                <div class="social">
                    <div class="logo-social">
                        <ul>
                            <li>
                                <a class="facebook" href="https://www.facebook.com/truongchinhHTCV" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a class="youtube" href="https://www.youtube.com/channel/UCnCs3An0EjSzQvWnKj1kNkQ" title=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a class="zalo" href="https://zalo.me/978909460008787311" title="Zalo"><img src="https://ansuonghyundai.com.vn/wp-content/themes/bb-theme-child/images/zalo-icon.png" alt="zalo-chat"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 menu-collapse collapse">
                <ul class="menu">
                    <li class="menu-item">
                        <a href="index.php">Trang chủ</a>
                    </li>
                    <li class="menu-item">
                        <a href="gioithieu.php">Giới thiệu</a>
                    </li>
                    <li class="menu-item">
                        <a href="product.php">Sản phẩm</a>
                        <ul class="sub-menu">
                            <?php
                            foreach ($products as $product) {
                            ?>
                                <li class="sub-menu-item">
                                    <a href="chitiet.php?id=<?= $product['id'] ?>">
                                        <img src="./uploads/<?= $product['img'] ?>" alt="">
                                    </a>
                                    <span><?= $product['tensp'] ?></span>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="menu-item">Liên hệ</li>
                    <li class="menu-item">Xưởng thùng</li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!--Header-->
<header class="page-header header-absolute">
    <div class="header-wrap">
        <div class="row header-content">
            <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12  header-left">
                <div class="col-lg-5 col-sm-12 col-xs-12 col-md-12 header-info">
                    <div class="header-title">
                        <a href="index.php">
                            <img src="images/logo-header.png" alt="Truck & Bus Hyundai Trường Chinh" />
                        </a>
                    </div>
                </div>
                <!-- ICON MENU -->
                <i class="fa fa-reorder icon-menu d-none" style="font-size:36px; display:none" data-toggle="collapse" data-target=".menu-collapse"></i>
                <div class="col-lg-7 col-md-7 d-sm-none header-menu">
                    <ul class="menu">
                        <li class="menu-item">
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li class="menu-item">
                            <a href="gioithieu.php">Giới thiệu</a>
                        </li>
                        <li class="menu-item">
                            <a href="product.php">Sản phẩm</a>
                            <ul class="sub-menu">
                                <?php
                                foreach ($products as $product) {
                                ?>
                                    <li class="sub-menu-item">
                                        <a href="chitiet.php?id=<?= $product['id'] ?>">
                                            <img src="./uploads/<?= $product['img'] ?>" alt="">
                                        </a>
                                        <span><?= $product['tensp'] ?></span>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="menu-item">Liên hệ</li>
                        <li class="menu-item">Xưởng thùng</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 social-network">
                <div class="social">
                    <div class="logo-social">
                        <ul>
                            <li>
                                <a class="facebook" href="https://www.facebook.com/truongchinhHTCV" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a class="youtube" href="https://www.youtube.com/channel/UCnCs3An0EjSzQvWnKj1kNkQ" title=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a class="zalo" href="https://zalo.me/978909460008787311" title="Zalo"><img src="https://ansuonghyundai.com.vn/wp-content/themes/bb-theme-child/images/zalo-icon.png" alt="zalo-chat"></a>
                            </li>
                            <li>
                                <div class="hotline">
                                    <div class="number">
                                        <a href="tel:<?=$info['sdt'] ?>"><?=$info['sdt'] ?></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 d-md-none menu-collapse collapse">
            <ul class="menu">
                <li class="menu-item">
                    <a href="index.php">Trang chủ</a>
                </li>
                <li class="menu-item">
                    <a href="gioithieu.php">Giới thiệu</a>
                </li>
                <li class="menu-item">
                    <a href="product.php">Sản phẩm</a>
                    <ul class="sub-menu">
                        <?php
                        foreach ($products as $product) {
                        ?>
                            <li class="sub-menu-item">
                                <a href="chitiet.php?id=<?= $product['id'] ?>">
                                    <img src="./uploads/<?= $product['img'] ?>" alt="">
                                </a>
                                <span><?= $product['tensp'] ?></span>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <li class="menu-item">Liên hệ</li>
                <li class="menu-item">Xưởng thùng</li>
            </ul>
        </div>
    </div>
</header>
<!-- Slider Header -->
<div class="header-slide">
    <div class="slider-children">
        <img class="slider-img" src="https://ansuonghyundai.com.vn/wp-content/uploads/2020/02/110XL-09.jpg" alt="">
    </div>
    <div class="slider-children">
        <img class="slider-img" src="https://ansuonghyundai.com.vn/wp-content/uploads/2020/02/Untitled-5-01.jpg" alt="">
    </div>
    <div class="slider-children">
        <img class="slider-img" src="https://ansuonghyundai.com.vn/wp-content/uploads/2020/02/mighty-ex-8-01.jpg" alt="">
    </div>
    <div class="slider-children">
        <img class="slider-img" src="https://ansuonghyundai.com.vn/wp-content/uploads/2020/02/solati-sua-hinh-01.jpg" alt="">
    </div>
    <div class="slider-children">
        <img class="slider-img" src="https://ansuonghyundai.com.vn/wp-content/uploads/2020/02/Untitled-1-01.jpg" alt="">
    </div>
    <div class="slider-children">
        <img class="slider-img" src="https://ansuonghyundai.com.vn/wp-content/uploads/2020/06/mighty-ex-8-gt-1-1589339346603-1.jpg" alt="">
    </div>
</div>