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
                <a class="nav-link" href="./product.html">Sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#addService">Dịch vụ</a>
            </li>
        </ul>
    </header>

    <div class="banner">
        <div class="background">
            <img src="../../assets/images/detail/banner1.png" alt="">
        </div>
        <div>
            <h3 class="content title">AUTO</h3>

            <h1 class="content description">VINFAST Theon<br><span>CÔNG NGHỆ BỨT PHÁ - TRẢI NGHIỆM ĐỈNH CAO</span></h1>
        </div>
    </div>

    <div class="slideshow">
        <ul class="table">
            <li>
                <div class="table-item">
                    <h4>
                        thiết kế
                    </h4>
                    <p>Kiểu dáng hiện đại, thể thao được phát triển bởi đơn vị thiết kế danh tiếng thế giới Kiska.</p>
                </div>
            </li>
            <li>
                <div class="table-item">
                    <h4>
                        động cơ
                    </h4>
                    <p>Động cơ điện đặt tại vị trí trung tâm, truyền động bằng dây xích, sản sinh công suất 3500W.</p>
                </div>
            </li>
            <li>
                <div class="table-item">
                    <h4>
                        tốc độ
                    </h4>
                    <p>Tốc độ tối đa lên đến 90km/h. Khả năng tăng tốc từ 0-50km/h trong vòng 6 giây.</p>
                </div>
            </li>
            <li>
                <div class="table-item">
                    <h4>
                        an toàn
                    </h4>
                    <p>Hệ thống phanh ABS Continental trước, sau tăng khả năng chống trượt khi di chuyển, an toàn trên
                        mọi địa hình.</p>
                </div>
            </li>
            <li>
                <div class="table-item">
                    <h4>
                        công nghệ
                    </h4>
                    <p>Trang bị công nghệ PAAK (Phone As A Key) hiện đại,
                        kết nối HMI - tích hợp Esim, và Khóa thông minh.</p>
                </div>
            </li>
            <li>
                <div class="table-item">
                    <h4>
                        pin
                    </h4>
                    <p>Pin Lithium sử dụng công nghệ Cell Pin của Samsung và công nghệ Pack Pin tiên tiến do VinFast
                        nghiên cứu và phát triển, đạt chuẩn châu Âu UNR R136.</p>
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
                    <h6>MẠNH MẼ - THỂ THAO</h6>
                    <h4>CÔNG NGHỆ - THỜI THƯỢNG</h4>
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
                    <h6>CÔNG NGHỆ BỨT PHÁ</h6>
                    <h4>KẾT NỐI MỌI HÀNH TRÌNH</h4>
                </div>
                <div class="description">
                    <div>
                        <h4>CÔNG NGHỆ PAAK</h4>
                        <p>Công nghệ PAAK (Phone As A Key) cho khả năng điều khiển xe dễ dàng bằng một chạm qua App điện
                            thoại không cần chìa khóa.</p>
                    </div>
                    <div>
                        <h4>KẾT NỐI HMI TÍCH HỢP ESIM</h4>
                        <p>Tự động chuẩn đoán và cảnh báo lỗi. Tự động cập nhật phần mềm trên xe thông qua app trên điện
                            thoại. Định vị xe (GPS) toàn cầu. Quản lý mọi hành trình.</p>
                    </div>
                    <div>
                        <h4>KHÓA THÔNG MINH</h4>
                        <p>Trang bị cảm biến tự động để khởi động và tắt máy trong phạm vi một mét. Đa tính năng trên
                            một
                            chìa khóa: mở và khóa cổ xe, cốp xe và khởi động tính năng chống trộm.</p>
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
                <h4>AN TOÀN ĐẲNG CẤP</h4>
                <ul>
                    <li><span>HỆ THỐNG PHANH</span><span>Hệ thống phanh ABS tại cả bánh trước và sau, tăng khả năng
                            chống trượt trong quá trình di chuyển, đảm bảo an toàn trên mọi địa hình.</span></li>
                    <li><span>KHẢ NĂNG CHỐNG NƯỚC</span><span>Tiêu chuẩn chống nước IP67 hoạt động ổn định ngay cả khi
                            ngập nước 0,5m trong 30 Phút.</span></li>
                    <li><span>ĐÈN FULL LED</span><span>Bao gồm cả đèn pha, đèn hậu, đèn xi nhan, đèn phanh. Hệ thống đèn
                            pha LED Projector nâng cao khả năng chiếu sáng an toàn khi di chuyển vào ban đêm.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="feature_2">
            <ul>
                <li><span>Động cơ</span><span>tốc độ tối đa lên đến 90km/h. Khả năng tăng tốc từ 0-50km/h trong vòng 6
                        giây.</span></li>
                <li><span>tốc độ</span><span>Động cơ trung tâm và truyền động bằng dây xích, đảm bảo sự cân bằng, cho
                        trải nghiệm lái hoàn hảo.</span></li>
                <li><span>hệ thống giảm xốc</span><span>Trang bị hệ thống giảm xóc Showa danh tiếng của Nhật Bản cho cảm
                        giác êm ái trên mọi hành trình.</span></li>
                <li><span>vận hành</span><span>Khả năng vận hành an toàn trên nhiều loại địa hình nhờ thiết kế khung xe
                        chịu lực tiêu chuẩn châu Âu.</span></li>
                <li><span>tiết kiệm</span><span>Pin Lithium tiết kiệm chi phí nhiên liệu, hỗ trợ chi phí bảo dưỡng trong
                        ba năm đầu.</span></li>
            </ul>
            <div>
                <h3>vẬN HÀNH MẠNH MẼ
                    THÁCH THỨC MỌI GIỚI HẠN</h3>
                <div><img src="../../assets/images/detail/feature2.png" alt=""></div>
            </div>
        </div>

        <div class="feature_3">
            <div class="gallery_3">
                <div><img src="../../assets/images/detail/gallery_main3_1.jpg" alt="">
                    <div>Hệ thống đèn Full LED và đèn pha projector</div>
                </div>
                <div><img src="../../assets/images/detail/gallery_main3_2.jpg" alt="">
                    <div>Cốp xe rộng 17 lít</div>
                </div>
                <div><img src="../../assets/images/detail/gallery_main3_3.jpg" alt="">
                    <div>Quãng đường di chuyển 101 km cho 01 lần sạc</div>
                </div>
                <div><img src="../../assets/images/detail/gallery_main3_4.jpg" alt="">
                    <div>Hệ thống phanh ABS 2 kênh Continental</div>
                </div>
                <div><img src="../../assets/images/detail/gallery_main3_5.jpg" alt="">
                    <div>Động cơ trung tâm, truyền động bằng dây xích</div>
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
            <div class="buy"><span>63.900.000 VNĐ</span><span>mua ngay</span></div>
            <ul>
                <li> GIÁ ĐÃ BAO GỒM VAT, SẠC</li>
                <li><strong>CHI PHÍ CỐ ĐỊNH</strong></li>
                <li>
                    <h3>Phí cọc 2 pin</h3>
                    <h4>2.400.000 VNĐ</h4>
                </li>
                <li><strong>CHI PHÍ VẬN HÀNH HÀNG THÁNG</strong> </li>
                <li>
                    <h3>Gói thuê pin tiêu chuẩn<br> Không giới hạn quãng đường đi</h3>
                    <h4>
                        350.000 VNĐ / THÁNG</h4>
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
                <h5 class="modal-title" id="addServiceLabel">Thêm Nhân Viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" action="./?q=staff" method="POST" novalidate>
                    <div class="row">
                        <div class="col-lg-4 mt-3">
                            <label for="fullname">Họ và Tên:</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nguyễn Văn A" required>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <label for="user">Tên người dùng:</label>
                            <input type="text" class="form-control" name="user" id="user" placeholder="nguyenvana" required>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <label for="id_card">CMND/CCCD:</label>
                            <input type="text" class="form-control" name="id_card" id="id_card" placeholder="352512xxx" required>
                        </div>
                        <div class="modal-footer mt-3">
                            <button name="member" type="submit" class="btn btn-primary">Thêm nhân viên</button>
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