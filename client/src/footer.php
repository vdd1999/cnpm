<?php
require_once('conn.php');
$getInfo = getInfoWeb();
if ($getInfo['code'] == '0') {
  $info = $getInfo['result'];
  $row = $info->fetch_assoc();
}
$getSanpham = getNewProduct();
if ($getSanpham['code'] == 0) {
  $thongtinsp = $getSanpham['result'];
}
?>
<!--PHONE-->
<div class="hotline-phone-ring-wrap">
  <div class="hotline-phone-ring">
    <div class="hotline-phone-ring-circle"></div>
    <div class="hotline-phone-ring-circle-fill"></div>
    <div class="hotline-phone-ring-img-circle">
      <a href="tel:<?= $row['sdt'] ?>" class="pps-btn-img">
        <img src="images/phone.webp" alt="Gọi điện thoại" width="50">
      </a>
    </div>
  </div>
  <div class="hotline-bar">
    <a href="tel:<?= $row['sdt'] ?>">
      <span class="text-hotline"><?= $row['sdt'] ?></span>
    </a>
  </div>
</div>
<footer class="py-5">
  <div class="footer-container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <aside class="aside-footer">
          <h4>Thông tin liên hệ</h4>
          <div class="info-footer">
            <p><strong>Mã số thuế:</strong> 0315 546 603</p>
            <p><strong>Showroom 35</strong><?=$row['diachi'] ?></p>
            <p><strong>Hotline kinh doanh:</strong> <?=$row['sdt'] ?></p>
            <p><strong>Email:</strong> <?=$row['email'] ?></p>
            <p>&nbsp;</p>
          </div>
        </aside>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <aside class="aside-footer"> 
          <h4>Về Chúng Tôi</h4>
          <div class="contact-footer">
            <ul class="menu-footer">
              <li><a>Trang chủ</a></li>
              <li><a>Giới thiệu</a></li>
              <li><a>Hệ Thống Phân Phối</a></li>
              <li><a>Liên Hệ</a></li>
            </ul>
          </div>
        </aside>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <aside class="aside-footer">
          <h4>Sản Phẩm</h4>
          <div class="product-footer">
            <ul class="menu-footer">
            <?php
            foreach ($thongtinsp as $sp) {
              ?>
              <li><a><?=$sp['tensp'] ?></a></li>
              <?php
            }
            ?>
              
            </ul>
          </div>
        </aside>
      </div>

      <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12">
        <aside class="aside-footer">
          <h4>Kết nối</h4>
          <div class="social-footer">
            <ul class="menu-footer">
              <li><a>Facebook</a></li>
              <li><a>Website</a></li>
              <li><a>Youtube</a></li>
              <li><a>Tiktok</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
    <p class="m-0 text-center text-white">Copyright &copy; Dat Vu 2020</p>
  </div>
  <!-- /.container -->
</footer>
  <!-- Bootstrap core JavaScript -->
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" rel="stylesheet" />
  <!--SLICK-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.0/slick-theme.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.0/slick.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.0/slick.css" rel="stylesheet" />
  <script src="main.js"></script>
<script>
  $(document).ready(function() {
    $('#infoModal').modal('show');
    $('.header-slide').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      arrows: true,
      auto: true,
      prevArrow: '<div class="slick-prev" style="left: 0;"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
      nextArrow: '<div class="slick-next" style="right: 15px;"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
      responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
    });
    $(window).scroll(function() {
      var aTop = $('.header-absolute').height();
      if ($(this).scrollTop() >= aTop) {
        $('.header-fixed').css('display', 'block');
      } else {
        $('.header-fixed').css('display', 'none');
      }
    });
  });
</script>