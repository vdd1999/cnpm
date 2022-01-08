<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="chitiet.css" />
  <link rel="stylesheet" href="index.css" />
  <?php
  include_once('header.php');
  require_once('conn.php');
  $getSanpham = getNewProduct();
  if ($getSanpham['code'] == 0) {
    $thongtinsp = $getSanpham['result'];
  }
  ?>
  </head>

<body id=product>
  <!-- Navigation -->

  <!-- Page Content -->

  <!--Page content-->
  <div class="page-contain" id="show-products">
    <div class="main_product">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 show-left">
          <div class="row">
              <?php
              foreach ($thongtinsp as $sp) {
              ?>
                  <a class="col-4" href="chitiet.php?id=<?= $sp['id'] ?>">
                    <div>
                      <div class="img-product">
                        <img src="./uploads/<?= $sp['img'] ?>" alt="<?= $sp['tensp'] ?>">
                      </div>
                      <div class="name-product">
                        <h2><?= $sp['tensp'] ?></h2>
                      </div>
                    </div>
                  </a>
              <?php
              }
              ?>
          </div>
        </div>
        <div class="rightMenu col-md-4 col-lg-4">
          <aside class="menu-detail">
            <h4 class="fl-widget-title">Danh Mục Tin</h4>
            <ul>
              <li><a>CÁC LOẠI THÙNG</a></li>
              <li><a>Chính sách bảo hành</a></li>
              <li>Hoạt Động CSKH</a></li>
              <li>Khuyến mãi</a></li>
              <li>PHỤ TÙNG &amp; PHỤ KIỆN CHÍNH HÃNG</a> </li>
            </ul>
          </aside>
        </div>
      </div>
    </div>
  </div>
  <!--Footer-->
  <?php
  include_once('footer.php');
  include_once('lienhetuvan.php');
  include_once('modalLaithu.php');
  include_once('sideNav.php');
  ?>
</body>

</html>