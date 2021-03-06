<?php

    if (!isset($_GET['id']) || $_GET['id'] == NULL) {
        echo "<script>window.location='./product.php';</script>";
    } else {
        $id = $_GET['id'];
        require_once("../../../config/conn.php");
        $getDetail = getDetail($id);
        if ($getDetail['code'] == 0) {
            $kh = $getDetail['result'];
            $data = $kh -> fetch_assoc();
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/global/base.css">
    <link rel="stylesheet" href="../../assets/css/components/header.css">
    <link rel="stylesheet" href="../../assets/css/pages/home.css">
    <link rel="stylesheet" href="../../assets/css/pages/detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="header-container">
        <img
            src="https://img.icons8.com/external-tal-revivo-color-tal-revivo/48/000000/external-honda-japanese-multinational-motorbike-and-conglomerate-corporation-automotive-color-tal-revivo.png" />
        <ul class="nav nav-container justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="./product.html">S???n ph???m</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#addService">D???ch v???</a>
            </li>
        </ul>
    </header>

    <div class="banner">
        <div class="background">
            <img src="../../assets/images/detail/banner1.png" alt="">
        </div>
        <div>
            <h3 class="content title">AUTO</h3>

            <h1 class="content description">VINFAST Theon<br><span>C??NG NGH??? B???T PH?? - TR???I NGHI???M ?????NH CAO</span></h1>
        </div>
    </div>

    <div class="slideshow">
        <ul class="table">
            <li>
                <div class="table-item">
                    <h4>
                        thi???t k???
                    </h4>
                    <p>Ki???u d??ng hi???n ?????i, th??? thao ???????c ph??t tri???n b???i ????n v??? thi???t k??? danh ti???ng th??? gi???i Kiska.</p>
                </div>
            </li>
            <li>
                <div class="table-item">
                    <h4>
                        ?????ng c??
                    </h4>
                    <p>?????ng c?? ??i???n ?????t t???i v??? tr?? trung t??m, truy???n ?????ng b???ng d??y x??ch, s???n sinh c??ng su???t 3500W.</p>
                </div>
            </li>
            <li>
                <div class="table-item">
                    <h4>
                        t???c ?????
                    </h4>
                    <p>T???c ????? t???i ??a l??n ?????n 90km/h. Kh??? n??ng t??ng t???c t??? 0-50km/h trong v??ng 6 gi??y.</p>
                </div>
            </li>
            <li>
                <div class="table-item">
                    <h4>
                        an to??n
                    </h4>
                    <p>H??? th???ng phanh ABS Continental tr?????c, sau t??ng kh??? n??ng ch???ng tr?????t khi di chuy???n, an to??n tr??n
                        m???i ?????a h??nh.</p>
                </div>
            </li>
            <li>
                <div class="table-item">
                    <h4>
                        c??ng ngh???
                    </h4>
                    <p>Trang b??? c??ng ngh??? PAAK (Phone As A Key) hi???n ?????i,
                        k???t n???i HMI - t??ch h???p Esim, v?? Kh??a th??ng minh.</p>
                </div>
            </li>
            <li>
                <div class="table-item">
                    <h4>
                        pin
                    </h4>
                    <p>Pin Lithium s??? d???ng c??ng ngh??? Cell Pin c???a Samsung v?? c??ng ngh??? Pack Pin ti??n ti???n do VinFast
                        nghi??n c???u v?? ph??t tri???n, ?????t chu???n ch??u ??u UNR R136.</p>
                </div>
            </li>
        </ul>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../../assets/images/detail/slide1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../assets/images/detail/slide2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../assets/images/detail/slide3.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="fas fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="fas fa-chevron-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="gallery_container">
        <div class="gallery">
            <div class="container">
                <div class="title">
                    <h6>M???NH M??? - TH??? THAO</h6>
                    <h4>C??NG NGH??? - TH???I TH?????NG</h4>
                </div>
                <div class="content">
                    <div class="mainCharacter">
                        <img src="../../assets/images/detail/gallery_main.png" alt="">
                    </div>
                    <ul class="photos">
                        <li><img src="../../assets/images/detail/photos_1.jpg" alt=""></li>
                        <li><img src="../../assets/images/detail/photos_2.jpg" alt=""></li>
                        <li><img src="../../assets/images/detail/photos_3.jpg" alt=""></li>
                        <li><img src="../../assets/images/detail/photos_4.jpg" alt=""></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="gallery">
            <div class="container">
                <div class="title">
                    <h6>C??NG NGH??? B???T PH??</h6>
                    <h4>K???T N???I M???I H??NH TR??NH</h4>
                </div>
                <div class="description">
                    <div>
                        <h4>C??NG NGH??? PAAK</h4>
                        <p>C??ng ngh??? PAAK (Phone As A Key) cho kh??? n??ng ??i???u khi???n xe d??? d??ng b???ng m???t ch???m qua App ??i???n
                            tho???i kh??ng c???n ch??a kh??a.</p>
                    </div>
                    <div>
                        <h4>K???T N???I HMI T??CH H???P ESIM</h4>
                        <p>T??? ?????ng chu???n ??o??n v?? c???nh b??o l???i. T??? ?????ng c???p nh???t ph???n m???m tr??n xe th??ng qua app tr??n ??i???n
                            tho???i. ?????nh v??? xe (GPS) to??n c???u. Qu???n l?? m???i h??nh tr??nh.</p>
                    </div>
                    <div>
                        <h4>KH??A TH??NG MINH</h4>
                        <p>Trang b??? c???m bi???n t??? ?????ng ????? kh???i ?????ng v?? t???t m??y trong ph???m vi m???t m??t. ??a t??nh n??ng tr??n
                            m???t
                            ch??a kh??a: m??? v?? kh??a c??? xe, c???p xe v?? kh???i ?????ng t??nh n??ng ch???ng tr???m.</p>
                    </div>
                </div>
            </div>
            <div>
                <img src="../../assets/images/detail/gallery_main2.png" alt="">
            </div>
        </div>
    </div>

    <div class="feature_container">
        <div class="feature_1">
            <div><img style="width: 100%" src="../../assets/images/detail/feature1.png" alt=""></div>
            <div class="content">
                <h4>AN TO??N ?????NG C???P</h4>
                <ul>
                    <li><span>H??? TH???NG PHANH</span><span>H??? th???ng phanh ABS t???i c??? b??nh tr?????c v?? sau, t??ng kh??? n??ng
                            ch???ng tr?????t trong qu?? tr??nh di chuy???n, ?????m b???o an to??n tr??n m???i ?????a h??nh.</span></li>
                    <li><span>KH??? N??NG CH???NG N?????C</span><span>Ti??u chu???n ch???ng n?????c IP67 ho???t ?????ng ???n ?????nh ngay c??? khi
                            ng???p n?????c 0,5m trong 30 Ph??t.</span></li>
                    <li><span>????N FULL LED</span><span>Bao g???m c??? ????n pha, ????n h???u, ????n xi nhan, ????n phanh. H??? th???ng ????n
                            pha LED Projector n??ng cao kh??? n??ng chi???u s??ng an to??n khi di chuy???n v??o ban ????m.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="feature_2">
            <ul>
                <li><span>?????ng c??</span><span>t???c ????? t???i ??a l??n ?????n 90km/h. Kh??? n??ng t??ng t???c t??? 0-50km/h trong v??ng 6
                        gi??y.</span></li>
                <li><span>t???c ?????</span><span>?????ng c?? trung t??m v?? truy???n ?????ng b???ng d??y x??ch, ?????m b???o s??? c??n b???ng, cho
                        tr???i nghi???m l??i ho??n h???o.</span></li>
                <li><span>h??? th???ng gi???m x???c</span><span>Trang b??? h??? th???ng gi???m x??c Showa danh ti???ng c???a Nh???t B???n cho c???m
                        gi??c ??m ??i tr??n m???i h??nh tr??nh.</span></li>
                <li><span>v???n h??nh</span><span>Kh??? n??ng v???n h??nh an to??n tr??n nhi???u lo???i ?????a h??nh nh??? thi???t k??? khung xe
                        ch???u l???c ti??u chu???n ch??u ??u.</span></li>
                <li><span>ti???t ki???m</span><span>Pin Lithium ti???t ki???m chi ph?? nhi??n li???u, h??? tr??? chi ph?? b???o d?????ng trong
                        ba n??m ?????u.</span></li>
            </ul>
            <div>
                <h3>v???N H??NH M???NH M???
                    TH??CH TH???C M???I GI???I H???N</h3>
                <div><img src="../../assets/images/detail/feature2.png" alt=""></div>
            </div>
        </div>

        <div class="feature_3">
            <div class="gallery_3">
                <div><img src="../../assets/images/detail/gallery_main3_1.jpg" alt="">
                    <div>H??? th???ng ????n Full LED v?? ????n pha projector</div>
                </div>
                <div><img src="../../assets/images/detail/gallery_main3_2.jpg" alt="">
                    <div>C???p xe r???ng 17 l??t</div>
                </div>
                <div><img src="../../assets/images/detail/gallery_main3_3.jpg" alt="">
                    <div>Qu??ng ???????ng di chuy???n 101 km cho 01 l???n s???c</div>
                </div>
                <div><img src="../../assets/images/detail/gallery_main3_4.jpg" alt="">
                    <div>H??? th???ng phanh ABS 2 k??nh Continental</div>
                </div>
                <div><img src="../../assets/images/detail/gallery_main3_5.jpg" alt="">
                    <div>?????ng c?? trung t??m, truy???n ?????ng b???ng d??y x??ch</div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner_2">
        <img style="width: 100%" src="../../assets/images/detail/banner2.png" alt="">
    </div>

    <div class="shopping">
        <div class="description">
            <div class="header">HONDA</div>
            <div class="title"><?= $data["tensp"]?>
            </div>
            <div class="buy"><span>63.900.000 VN??</span><span>mua ngay</span></div>
            <ul>
                <li> GI?? ???? BAO G???M VAT, S???C</li>
                <li><strong>CHI PH?? C??? ?????NH</strong></li>
                <li>
                    <h3>Ph?? c???c 2 pin</h3>
                    <h4>2.400.000 VN??</h4>
                </li>
                <li><strong>CHI PH?? V???N H??NH H??NG TH??NG</strong> </li>
                <li>
                    <h3>G??i thu?? pin ti??u chu???n<br> Kh??ng gi???i h???n qu??ng ???????ng ??i</h3>
                    <h4>
                        350.000 VN?? / TH??NG</h4>
                </li>
            </ul>
        </div>
        <div class="slideshow2">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php echo "<img class='d-block w-100' src='../../../uploads/".$data['img']."' alt='Second slide'>"; ?>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div>
        <img width="100%" src="../../assets/images/detail/footer.png" alt="">
    </div>

    <!-- Modal Service -->
    <div class="modal fade" id="addService" tabindex="-1" role="dialog" aria-labelledby="addServiceLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addServiceLabel">Th??m Nh??n Vi??n</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">??</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" action="./?q=staff" method="POST" novalidate>
                    <div class="row">
                        <div class="col-lg-4 mt-3">
                            <label for="fullname">H??? v?? T??n:</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nguy???n V??n A" required>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <label for="user">T??n ng?????i d??ng:</label>
                            <input type="text" class="form-control" name="user" id="user" placeholder="nguyenvana" required>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <label for="id_card">CMND/CCCD:</label>
                            <input type="text" class="form-control" name="id_card" id="id_card" placeholder="352512xxx" required>
                        </div>
                        <div class="modal-footer mt-3">
                            <button name="member" type="submit" class="btn btn-primary">Th??m nh??n vi??n</button>
                        </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <!-- End Modal -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>