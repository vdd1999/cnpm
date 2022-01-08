<?php
require_once('conn.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $getProduct = getDetail($id);
  if ($getProduct['code'] == '0') {
    $data = $getProduct['result'];
    $row = $data->fetch_assoc();
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Chi tiết</title>
<link rel="stylesheet" href="chitiet.css" />
<!-- Header -->
  <?php
  include_once('header.php');
  ?>
</head>

<body id="chitiet">
  <!--Page content-->
  <div class="page-contain" id="show-product-detail">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 detail-left">
          <div class="detail-product">
            <div class="name-product">
              <h1><?= $row['tensp'] ?></h1>
            </div>
            <div class="img-detail-product">
              <img src="uploads/<?= $row['img'] ?>" alt="">
            </div>

            <div class="thongso-product">
              <div id="noibat">
                <div class="title-detail">
                  <h2>Nổi bật</h2>
                </div>
                <div id="noibat-content">
                  <?= $row['mota'] ?>
                </div>
              </div>

              <div id="noithat">
                <div class="title-detail">
                  <h2>Nội thất</h2>
                </div>
                <div id="noithat-content">
                  <?= $row['noithat'] ?>
                </div>
              </div>

              <div id="ngoaithat">
                <div class="title-detail">
                  <h2>Ngoại thất</h2>
                </div>
                <div id="ngoaithat-content">
                  <?= $row['ngoaithat'] ?>
                </div>
              </div>

              <div id="thongsoxe">
                <div class="title-detail">
                  <h2>Thông số kĩ thuật</h2>
                </div>
                <div id="thongsoxe-content">
                  <p>Kích thước</p>
                  <div class="kichthuoc-table">
                    <table class="thongsoxe-table">
                      <tbody>
                        <?= $row['trongluongbanthan'] ?
                          "<tr>
                          <td>Trọng lượng bản thân</td>
                          <td>" . $row['trongluongbanthan'] . "&nbsp; &nbsp;Kg</td>
                        </tr>" : "" ?>
                        <?= $row['cautruoc'] ?
                          "<tr>
                          <td>Phân bố cầu trước</td>
                          <td>" . $row['cautruoc'] . "&nbsp; &nbsp;Kg</td>
                        </tr>" : "" ?>
                        <?= $row['causau'] ?
                          "<tr>
                          <td>Cầu sau</td>
                          <td>1185&nbsp; &nbsp;Kg</td>
                        </tr>" : "" ?>
                        <?= $row['taitrongchophep'] ?
                          "<tr>
                          <td>Tải trọng cho phép chở</td>
                          <td>" . $row['causau'] . "&nbsp; &nbsp;Kg</td>
                        </tr>
                        " : "" ?>
                        <?= $row['songuoichophep'] ?
                          "<tr>
                        <td>Số người cho phép chở</td>
                        <td>" . $row['songuoichophep'] . " người</td>
                      </tr>
                        " : "" ?>
                        <?= $row['trongluongtoanbo'] ?
                          "<tr>
                        <td>Trọng lượng toàn bộ</td>
                        <td>" . $row['trongluongtoanbo'] . "&nbsp; &nbsp;Kg</td>
                      </tr>
                        " : "" ?>
                        <?= $row['kichthuocxe'] ?
                          "<tr>
                        <td>Kích thước xe (D X R X C)</td>
                        <td>" . $row['kichthuocxe'] . "&nbsp; &nbsp; &nbsp;mm</td>
                      </tr>
                        " : "" ?>

                        <?= $row['kichthuoclongthung'] ?
                          "<tr>
                        <td>Kích thước lòng thùng hàng</td>
                        <td>" . $row['kichthuoclongthung'] . "/…&nbsp; &nbsp;mm</td>
                      </tr>
                        " : "" ?>
                        <?= $row['khoangcachtruc'] ?
                          "<tr>
                        <td>Khoảng cách trục</td>
                        <td>" . $row['khoangcachtruc'] . "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;mm</td>
                      </tr>
                        " : "" ?>
                        <?= $row['vetbanhtruocsau'] ?
                          "<tr>
                        <td>Vệt bánh xe trước/sau</td>
                        <td>" . $row['vetbanhtruocsau'] . "</td>
                      </tr>
                        " : "" ?>
                        <?= $row['sotruc'] ?
                          "<tr>
                        <td>Số trục</td>
                        <td>" . $row['sotruc'] . "</td>
                      </tr>
                        " : "" ?>
                        <?= $row['congthucbanhxe'] ?
                          "<tr>
                        <td>Công thức bánh xe</td>
                        <td>" . $row['congthucbanhxe'] . "</td>
                      </tr>
                        " : "" ?>
                        <?= $row['loainhienlieu'] ?
                          "
                        <tr>
                          <td>Loại nhiên liệu</td>
                          <td>" . $row['loainhienlieu'] . "</td>
                        </tr>
                        " : "" ?>
                      </tbody>
                    </table>
                  </div>

                  <p>Động cơ</p>
                  <div class="dongco-table">
                    <table class="ts-table">
                      <tbody>
                        <?= $row['nhanhieudongco'] ?
                          "<tr>
                        <td>Nhãn hiệu động cơ</td>
                        <td>" . $row['nhanhieudongco'] . "</td>
                      </tr>
                        " : "" ?>

                        <?= $row['loaidongco'] ?
                          "<tr>
                        <td>Loại động cơ</td>
                        <td>" . $row['loaidongco'] . "</td>
                      </tr>
                        " : "" ?>

                        <?= $row['thetich'] ?
                          "<tr>
                        <td>Thể tích</td>
                        <td>" . $row['thetich'] . "&nbsp; cm3</td>
                      </tr>
                        " : "" ?>

                        <?= $row['congsuatlonnhat'] ?
                          "<tr>
                        <td>Công suất lớn nhất/ tốc độ quay</td>
                        <td>" . $row['congsuatlonnhhat'] . "</td>
                      </tr>
                        " : "" ?>
                      </tbody>
                    </table>
                  </div>
                  <p>Lốp xe</p>
                  <div class="lopxe-table">
                    <table class="ts-table">
                      <tbody>
                        <?= $row['soluonglop'] ?
                          "<tr>
                          <td>Số lượng lốp trên trục</td>
                          <td>".$row['soluonglop']."</td>
                        </tr>
                        " : "" ?>

                        <?= $row['loptruocsau'] ?
                          "<tr>
                          <td>Lốp trước/sau</td>
                          <td>".$row['loptruocsau']."</td>
                        </tr>
                        " : "" ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-lg-block d-md-block col-md-4 col-lg-4">
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

  <!--Foooter-->
  <?php
  include_once('modalLaithu.php');
  include_once('sideNav.php');
  include_once('lienheModal.php');
  include_once('lienhetuvan.php');
  include_once('footer.php');
  ?>
</body>

</html>