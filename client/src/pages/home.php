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
  <link rel="stylesheet" href="../../assets/css/pages/home.css">
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
        <a class="nav-link" href="./product.php">Sản phẩm</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#addService">Dịch vụ</a>
      </li>
      
    </ul>
  </header>
  <div class="home-content">
    <div class="video-wrapper">
      <video playsinline="" autoplay="" muted="" loop="" id="video-vinfast-banner" poster="/" __idm_id__="1376257">
        <source src="https://storage.googleapis.com/cms_data_public/%5B3MB%20Web%5D%2020220106_Vinfast_VF8_VF9.mov"
          type="video/mp4">
      </video>
      <img class="b-lazy" data-original="https://vinfastauto.com/themes/porto/img/Vlight-down.png" alt="v-light"
        src="https://vinfastauto.com/themes/porto/img/Vlight-down.png">
    </div>
    <div class="product">
      <div class="title">
        <h2>Xe máy</h2>
        Sản phẩm của người Việt, dành cho người Việt với các chính sách
        <br>
        ưu đãi tốt nhất thị trường
      </div>
      <div class="product-list">
        <div id="carousel-product" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-product" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-product" data-slide-to="1"></li>
            <li data-target="#carousel-product" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="item">
                      <img src="https://storage.googleapis.com/vinfast-data-01/theon_1639673984.png" alt="">
                      <div class="slogan">
                        Công nghệ bứt phá
                        <br>
                        Trải nghiệm đỉnh cao
                      </div>
                      <div class="title">
                        THEON
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="type">
                          <div>Dòng xe</div>
                          <div>CAO CẤP</div>
                        </div>
                        <div class="price">
                          <div>Giá niêm yết</div>
                          <div>63.9 triệu</div>
                        </div>
                      </div>
                      <a class="btn btn-detail" href="">
                        XEM CHI TIẾT
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="item">
                      <img src="https://storage.googleapis.com/vinfast-data-01/theon_1639673984.png" alt="">
                      <div class="slogan">
                        Công nghệ bứt phá
                        <br>
                        Trải nghiệm đỉnh cao
                      </div>
                      <div class="title">
                        THEON
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="type">
                          <div>Dòng xe</div>
                          <div>CAO CẤP</div>
                        </div>
                        <div class="price">
                          <div>Giá niêm yết</div>
                          <div>63.9 triệu</div>
                        </div>
                      </div>
                      <a class="btn btn-detail" href="">
                        XEM CHI TIẾT
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="item">
                      <img src="https://storage.googleapis.com/vinfast-data-01/theon_1639673984.png" alt="">
                      <div class="slogan">
                        Công nghệ bứt phá
                        <br>
                        Trải nghiệm đỉnh cao
                      </div>
                      <div class="title">
                        THEON
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="type">
                          <div>Dòng xe</div>
                          <div>CAO CẤP</div>
                        </div>
                        <div class="price">
                          <div>Giá niêm yết</div>
                          <div>63.9 triệu</div>
                        </div>
                      </div>
                      <a class="btn btn-detail" href="">
                        XEM CHI TIẾT
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="item">
                      <img src="https://storage.googleapis.com/vinfast-data-01/theon_1639673984.png" alt="">
                      <div class="slogan">
                        Công nghệ bứt phá
                        <br>
                        Trải nghiệm đỉnh cao
                      </div>
                      <div class="title">
                        THEON
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="type">
                          <div>Dòng xe</div>
                          <div>CAO CẤP</div>
                        </div>
                        <div class="price">
                          <div>Giá niêm yết</div>
                          <div>63.9 triệu</div>
                        </div>
                      </div>
                      <a class="btn btn-detail" href="">
                        XEM CHI TIẾT
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="item">
                      <img src="https://storage.googleapis.com/vinfast-data-01/theon_1639673984.png" alt="">
                      <div class="slogan">
                        Công nghệ bứt phá
                        <br>
                        Trải nghiệm đỉnh cao
                      </div>
                      <div class="title">
                        THEON
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="type">
                          <div>Dòng xe</div>
                          <div>CAO CẤP</div>
                        </div>
                        <div class="price">
                          <div>Giá niêm yết</div>
                          <div>63.9 triệu</div>
                        </div>
                      </div>
                      <a class="btn btn-detail" href="">
                        XEM CHI TIẾT
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="item">
                      <img src="https://storage.googleapis.com/vinfast-data-01/theon_1639673984.png" alt="">
                      <div class="slogan">
                        Công nghệ bứt phá
                        <br>
                        Trải nghiệm đỉnh cao
                      </div>
                      <div class="title">
                        THEON
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="type">
                          <div>Dòng xe</div>
                          <div>CAO CẤP</div>
                        </div>
                        <div class="price">
                          <div>Giá niêm yết</div>
                          <div>63.9 triệu</div>
                        </div>
                      </div>
                      <a class="btn btn-detail" href="">
                        XEM CHI TIẾT
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="item">
                      <img src="https://storage.googleapis.com/vinfast-data-01/theon_1639673984.png" alt="">
                      <div class="slogan">
                        Công nghệ bứt phá
                        <br>
                        Trải nghiệm đỉnh cao
                      </div>
                      <div class="title">
                        THEON
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="type">
                          <div>Dòng xe</div>
                          <div>CAO CẤP</div>
                        </div>
                        <div class="price">
                          <div>Giá niêm yết</div>
                          <div>63.9 triệu</div>
                        </div>
                      </div>
                      <a class="btn btn-detail" href="">
                        XEM CHI TIẾT
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="item">
                      <img src="https://storage.googleapis.com/vinfast-data-01/theon_1639673984.png" alt="">
                      <div class="slogan">
                        Công nghệ bứt phá
                        <br>
                        Trải nghiệm đỉnh cao
                      </div>
                      <div class="title">
                        THEON
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="type">
                          <div>Dòng xe</div>
                          <div>CAO CẤP</div>
                        </div>
                        <div class="price">
                          <div>Giá niêm yết</div>
                          <div>63.9 triệu</div>
                        </div>
                      </div>
                      <a class="btn btn-detail" href="">
                        XEM CHI TIẾT
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="item">
                      <img src="https://storage.googleapis.com/vinfast-data-01/theon_1639673984.png" alt="">
                      <div class="slogan">
                        Công nghệ bứt phá
                        <br>
                        Trải nghiệm đỉnh cao
                      </div>
                      <div class="title">
                        THEON
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="type">
                          <div>Dòng xe</div>
                          <div>CAO CẤP</div>
                        </div>
                        <div class="price">
                          <div>Giá niêm yết</div>
                          <div>63.9 triệu</div>
                        </div>
                      </div>
                      <a class="btn btn-detail" href="">
                        XEM CHI TIẾT
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="video-wrapper">
      <img class="b-lazy" data-original="https://vinfastauto.com/themes/porto/img/new-home-page/Vlight-up.png"
        alt="v-light" src="https://vinfastauto.com/themes/porto/img/new-home-page/Vlight-up.png">
      <video playsinline="" autoplay="" muted="" loop="" id="video-vinfast-middle"
        poster="https://storage.googleapis.com/vinfast-data-01/img_theon20_1638766137_1638847686_1639674000.png">
        <source src="https://storage.googleapis.com/cms_data_public/vinfast-vn/Xe-may-dien.mp4" type="video/mp4">
      </video>
      <img class="b-lazy" data-original="https://vinfastauto.com/themes/porto/img/Vlight-down.png" alt="v-light"
        src="https://vinfastauto.com/themes/porto/img/Vlight-down.png">
    </div>
    <div class="customer">
      <div class="title">
        <h2>Cảm nhận khách hàng</h2>
      </div>
      <div class="customer-list">
        <div id="carousel-customer" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-customer" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-customer" data-slide-to="1"></li>
            <li data-target="#carousel-customer" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="desc">
                  “Trong ngành công nghiệp xe hơi, việc thiết kế và <br>chế tạo không chỉ một mà hai chiếc xe chỉ trong
                  <br>
                  vòng 12 tháng là tốc độ không tưởng”
                </div>
                <div class="author">- Top Gear -</div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="desc">
                  “VinFast, thương hiệu ô tô Việt thuộc Tập đoàn
                  <br>Vingroup là điển hình tiêu biểu của
                  việc nhanh
                  <br>chóng phục hồi và có tiến bước nhanh chóng
                  <br>sau khi Việt Nam thành công chống dịch
                  Covid...”
                </div>
                <div class="author">- Bloomberg -</div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="desc">
                  “Chìa khóa để đạt thành công ngay từ khâu sản <br>xuất của VinFast chính là các đối
                  tác mạnh mẽ <br>như ABB, Bosch, Magna Steyr và Siemens”</div>
                <div class="author">- CNBC -</div>
              </div>
            </div>
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