<?php
require_once('conn.php');
$getSanpham = getNewProduct();
if ($getSanpham['code'] == 0) {
  $thongtinsp = $getSanpham['result'];
}
$getBestSeller = getBestSeller();
if ($getBestSeller['code'] == 0) {
  $bestseller = $getBestSeller['result'];
}

$getInfo = getInfoWeb();
if ($getInfo['code'] == '0') {
  $infoWeb = $getInfo['result'];
  $info = $infoWeb->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
<title>Trang chủ</title>

  <?php
  include_once('header.php');
  ?>
  </head>

<body>
  <!-- Page Content -->
  <section>
    <div class="show-products">
      <div class="title-products">
        <h1>SẢN PHẨM</h1>
      </div>
      <div class="cards products">
        <?php
        foreach ($thongtinsp as $tt) {
        ?>
          <!-- A card with given width -->
          <a class="cards_product" href="chitiet.php?id=<?= $tt['id'] ?>">
            <div>
              <div class="img-product">
                <img src="./uploads/<?= $tt['img'] ?>" alt="<?= $tt['tensp'] ?>">
              </div>
              <div class="name-product">
                <h2><?= $tt['tensp'] ?></h2>
              </div>
            </div>
          </a>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  <section>
    <div class="row info-owner">
      <div class="avt-owner">
        <img src="./images/monlinh.jpg" alt="Minh bán xe">
      </div>
      <div class="contact">
        <h1>Mr.Minh</h1>
        <strong>Đại diện kinh doanh Hyundai Truck & Bus Trường Chinh</strong>
        <p>
          Với nhiều năm kinh nghiệm trong lĩnh vực tư vấn bàn hàng và đã từng là kỹ thuật viên chẩn đoán tại Mercedes-Benz, Mr.Minh sẽ mang lại cho khách hàng sản phẩm phù hợp với nhu cầu sử dụng cũng như kỹ thuật xe. Niềm tin - chất lượng là yếu tố then chốt để mang tới cho khách hàng sản phẩm tốt nhất. Liên hệ đẻ nhận nhiều ưu đãi đặc biệt 
        </p>
        <p>Hotline:<span> 039.24.899.24</span></p>
        <p>Email: <span>ngocminh.banxe@gmail.com</span></p>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <?php
  include_once('sideNav.php');
  include_once('modalLaithu.php');
  include_once('footer.php');
  include_once('lienhetuvan.php');
  ?>
</body>

</html>