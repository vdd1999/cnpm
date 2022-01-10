<?php
  
  require_once '../../../config/conn.php'; 
  $getSanPham = getSanpham();
  $getNewProduct = getNewProduct();
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['dangkilaithu'])) {
      $lastname = $_POST['last_name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $sample = $_POST['sample'];
      dangkilaithu($lastname, $email, $phone, $sample);
    }
  }
  if ($getSanPham['code'] == 0) {
   
    $result2 = $getSanPham['result'];
  }
  if ($getNewProduct['code'] == 0) {
    $result = $getNewProduct['result'];
  }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/global/base.css">
  <link rel="stylesheet" href="../../assets/css/components/header.css">
  <link rel="stylesheet" href="../../assets/css/pages/product.css">
  <link rel="icon"
    href="https://img.icons8.com/external-tal-revivo-color-tal-revivo/48/000000/external-honda-japanese-multinational-motorbike-and-conglomerate-corporation-automotive-color-tal-revivo.png"
    type="image/x-icon">
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
</head>

<body>
  <header class="header-container">
    <a href="./home.html">
      <img
        src="https://img.icons8.com/external-tal-revivo-color-tal-revivo/48/000000/external-honda-japanese-multinational-motorbike-and-conglomerate-corporation-automotive-color-tal-revivo.png" />
    </a>
    <ul class="nav nav-container justify-content-end">
      <li class="nav-item">
        <a class="nav-link active" href="./product.html">Sản phẩm</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#addService">Dịch vụ</a>
      </li>
    </ul>
  </header>

  <div class="product-container">
    <div class="slide-intro">
      <div id="carousel-intro" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-intro" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-intro" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100"
              src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw232b796b/landingpage/images/banner-thexanh-VN.png"
              alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"
              src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw5072fa8b/landingpage/images/banner-evn-vi.jpg"
              alt="Second slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-intro" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-intro" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="policy container">
      <div class="row">
        <div class="col-lg-4">
          <div class="item">
            <img
              src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwf00ff599/landingpage/images/pay.png">
            <div class="mt-4">
              <p class="text--highlight">THANH TOÁN</p>
              <p>KHI NHẬN XE</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <img
              src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw41e736bd/landingpage/images/sales.png">
            <div class="mt-4">
              <p>ƯU ĐÃI TRẢ GÓP</p>
              <p class="text--highlight">LÃI SUẤT 0%</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <img
              src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw9890cb7b/landingpage/images/car.png">
            <div style="margin-top:40px">
              <p> NHẬN XE TẠI HỆ THỐNG <span class="text--highlight">SHOWROOM</span></p>
              <p>TRÊN TOÀN QUỐC</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="product-new">
      <h2 class="title">
        SẢN PHẨM MỚI
      </h2>
      <div class="container">
        <div class="row">
          <?php
              while ($value = $result->fetch_assoc()) {
          ?>
          <div class="col-lg-6">
            <div class="item">
                <?php echo "<img src='../../../uploads/".$value['img']."' >"; ?>
              <div class="information">
                <div>
                  <h4 class="title"><?= $value["tensp"]?></h4>
                  <p>Giá đã bao gồm VAT</p>
                </div>
                <div>
                  <h4 class="price"><?= $value["price"]?> <span class="text--small">vnđ</span></h4>
                </div>
              </div>
              <hr>
              <div class="sales">
                <div>
                  <h4 class="title">Ưu đãi</h4>
                </div>
                <div>
                  <h4 class="title">Trả góp lãi suất 0%</h4>
                </div>
              </div>
              <a class="btn btn-detail" href="./detail.php?id=<?php echo $value['id'] ?>">
                XEM CHI TIẾT
              </a>
            </div>
          </div>
          <?php
              }
          ?>
        </div>
      </div>
    </div>
   
    <div class="policy-info container">
      <p class="title">CHÍNH SÁCH PIN LINH HOẠT - TIẾT KIỆM</p>
      <p class="summary">Mua pin, thuê pin linh hoạt, tiết kiệm. Khách hàng linh hoạt lựa chọn hình thức mua pin <br>
        hoặc thuê pin ưu việt với gói thuê pin chỉ từ 149.000 vnđ/pin/tháng.</p>
      <img class="img-policy"
        src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw713cee14/landingpage/images/policy.png"
        alt="" width="100%">
    </div>
    <div class="four-easy">
      <h2 class="title">4 BƯỚC ĐƠN GIẢN ĐỂ THANH TOÁN</h2>
      <div class="images container">
        <div class="row">
          <div class="col-md-3 col-12">
            <div class="item">
              <div class="item-icon">
                <div>
                  <img
                    src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwbc7864bc/landingpage/images/login-register.png"
                    alt="" width="100px">
                  <img class="arrow"
                    src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw58eaf8db/landingpage/images/arrow.svg"
                    alt="" width="11px">
                </div>
                <p class="item-text">Đăng nhập / đăng ký<br>&amp; Lựa chọn xe</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-12">
            <div class="item">
              <div class="item-icon">
                <div>
                  <img
                    src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwfa8d31a0/landingpage/images/order.png"
                    alt="" width="100px">
                  <img class="arrow"
                    src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw58eaf8db/landingpage/images/arrow.svg"
                    alt="" width="11px">
                </div>
                <p class="item-text">Đặt mua<br>&amp; Chọn Showroom nhận xe</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-12">
            <div class="item">
              <div class="item-icon">
                <div>
                  <img
                    src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw1e804257/landingpage/images/payment-method.png"
                    alt="" width="100px">
                  <img
                    src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw58eaf8db/landingpage/images/arrow.svg"
                    class="arrow" alt="" width="11px">
                </div>
                <p class="item-text">Chọn phương thức thanh toán<br>(COD, trả trước, trả góp 0%)</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-12">
            <div class="item">
              <div class="item-icon">
                <div>
                  <img
                    src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwe6af0a92/landingpage/images/showroom.png"
                    alt="" width="100px">
                </div>
                <p class="item-text">Đến Showroom kiểm tra<br>&amp; nhận xe</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tutorial">
      <h2 class="title">HƯỚNG DẪN TRẢ GÓP</h2>
      <h4 class="sub-title">TRẢ GÓP QUA THẺ TÍN DỤNG</h4>
      <div class="images container">
        <div class="row">
          <div class="col-md-4 col-12">
            <img
              src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw0d6b934b/landingpage/images/step_1.png"
              width="100%">
          </div>
          <div class="col-md-4 col-12 step">
            <img
              src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw5e661c6a/landingpage/images/step_2.png"
              width="100%">
          </div>
          <div class="col-md-4 col-12 step">
            <img
              src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwd7f2e82a/landingpage/images/step_3.png"
              width="100%">
          </div>
        </div>
      </div>
    </div>
    <div class="slide-intro">
      <div id="carousel-intro" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-intro" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-intro" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100"
              src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw232b796b/landingpage/images/banner-thexanh-VN.png"
              alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"
              src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw5072fa8b/landingpage/images/banner-evn-vi.jpg"
              alt="Second slide">
          </div>
        </div>
      </div>
    </div>
    <div class="service">
      <h2 class="title">ĐĂNG KÝ TRẢI NGHIỆM XE</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-12 pd-l-0">
            <img
              src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw666faf18/landingpage/images/register.png"
              alt="" width="100%">
          </div>
          <div class="col-md-4 col-12">
            <form method="POST" action="product.php">
              <div class="group-item">
                <label class="label">Họ tên <span class="mark">*</span></label>
                <input placeholder="Họ tên" id="last_name" maxlength="80" name="last_name" size="20" type="text"
                  class="custom-required" value="">
              </div>
              <div class="group-item">
                <label class="label">Số điện thoại <span class="mark">*</span></label>
                <input placeholder="Tối thiểu 10 ký tự" id="phone" maxlength="10" name="phone" size="20" type="text"
                  class="custom-required" value="">
              </div>
              <div class="group-item">
                <label class="label">Email <span class="mark">*</span></label>
                <input placeholder="Nhập email" id="email" maxlength="10" name="email" size="20" type="text"
                  class="custom-required" value="">
              </div>
              <div class="group-item">
                <label class="label">Mẫu xe <span class="mark">*</span></label>
                <select name="sample" id="sample">
                  <option value="" selected disabled hidden>Lựa chọn</option>
                  <?php
                  foreach ($result2 as $sp) {
                  echo $value['id'];
                  ?>
                  <option value="<?= $sp['id'] ?>"><?= $sp['tensp'] ?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>
              <button type="submit" name="dangkilaithu" class="btn btn-service">
                ĐĂNG KÝ LÁI THỬ
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
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
</body>

</html>