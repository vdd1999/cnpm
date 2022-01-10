<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  print_r($_POST);
  $fullname = $_POST['fullname'];
  $sdt = $_POST['sdt'];
  $ngaytao = $_POST['ngaytao'];
  $noidung = $_POST['noidung'];
  $tongtien = $_POST['tongtien'];
  $thanhtoan1 = $_POST['thanhtoan1'];
  $manv = $_POST['manhanvien'];


  if (isset($thanhtoan2)) {
    $thanhtoan2 = $_POST['thanhtoan2'];
  }
  if (isset($thanhtoan3)) {
    $thanhtoan3 = $_POST['thanhtoan3'];
  }

  if (!isset($thanhtoan2)) {
    $thanhtoan2 = 0;
  }
  if (!isset($thanhtoan3)) {
    $thanhtoan3 = 0;
  }


  $checkStaff = $managStaff->setContract($sdt, $ngaytao, $noidung, $tongtien, $thanhtoan1, $thanhtoan2, $thanhtoan3, $manv);
}

if (isset($_GET['id'])) {
  $sdt = $_GET['id'];
  print_r($sdt);
  $checkStaff = $managStaff->deleteCustomer($sdt);
}

if (isset($checkStaff)) {
  echo $checkStaff;
}
?>

<section class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="main-body">
          <div class="page-wrapper">
            <div class="page-header">
              <div class="page-block">
                <div class="row align-items-center">
                  <div class="col-md-12">
                    <div class="page-header-title">
                      <h5 class="m-b-10">Quản Lý hợp đồng</h5>
                    </div>
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href=""><i class="feather icon-home"></i></a></li>
                      <li class="breadcrumb-item"><a href="#!">Quản Lý hợp đồng</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- HIEN THI DANH SACH THANH VIEN -->
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header" style="padding-bottom: 0px; padding-top: 10px;">
                    <div class="float-left p-2">
                      DANH SÁCH HỢP ĐỒNG
                    </div>
                    <div class="float-right">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmember"><i class="fa fa-edit"></i>&nbsp; Thêm hợp đồng</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="dt-responsive table-responsive">
                      <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                          <div class="col-sm-12">
                            <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                              <thead>
                                <tr>
                                  <th scope="row " style="width: 5%; ">#</th>
                                  <th scope="row " style="width: 10%; ">mã hợp đồng</th>

                                  <th scope="row " style="width: 15%; ">số điện thoại </th>
                                  <th scope="row " style="width: 25%; ">Tổng tiền </th>
                                  <th scope="row " style="width: 25%; ">Hình thức thanh toán </th>
                                  <th scope="row " style="width: 25%; ">Số tiền đã trả</th>
                                  <th scope="row " style="width: 25%; ">Trạng thái</th>
                                  <th class="text-center" scope="row " style="width: 5%; ">Thao tác</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php

                                $result = $managStaff->getContract();
                                $i = 1;
                                if ($result != false) {
                                  while ($value = $result->fetch_assoc()) {
                                ?>
                                    <tr>
                                      <td><?php echo $i++ ?></td>
                                      <td><?php echo $value['maHopDong'] ?></td>
                                      <td><?php echo $value['maKH'] ?></td>
                                      <td><?php echo $value['tongTien'] ?></td>
                                      <td><?php echo $value['hinhThuc'] ?></td>
                                      <td><?php echo $value['soTienDaTra'] ?></td>
                                      <td><?php echo $value['trangThai'] ?></td>

                                      <td class="text-center ">
                                        <a class="btn btn-primary" style="margin: 0; padding: 2px 8px;" href="?q=updateContract&id=<?php echo $value['maHopDong'] ?>"><i class="fa fa-edit" style="margin-right: 0;"></i></a>
                                      </td>
                                    </tr>
                                <?php }
                                } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- KET THUC HIEN THI DANH SACH THANH VIEN -->
            <!-- [Modal] -->
            <div class="modal fade" id="addmember" tabindex="-1" role="dialog" aria-labelledby="addmemberLabel" style="display: none;" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addmemberLabel">Thêm Hợp đồng </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="needs-validation" action="" method="POST" novalidate>
                      <div class="row">
                        <div class="col-lg-6 mt-6">
                          <label for="fullname">Họ và Tên:</label>
                          <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nguyễn Văn A" required>
                        </div>
                        <div class="col-lg-6 mt-6">
                          <label for="user">Số điện thoại:</label>
                          <input type="text" class="form-control" name="sdt" id="user" placeholder="0908789000" required>
                        </div>
                      </div>
                      <div class="row" style="margin-top: 2%">
                        <div class="col-lg-6 mt-6">
                          <label for="id_card">Ngày tạo:</label>
                          <input disabled="disabled" type="text" class="form-control" name="ngaytao" id="email" value=<?php echo date("d-m-Y ") ?> required>
                        </div>
                        <div class="col-lg-6 mt-6">
                          <label for="id_card">Nội dung </label>
                          <textarea type="text" class="form-control" name="noidung" id="id_card" placeholder="352512xxx"> </textarea>
                        </div>
                      </div>
                      <div class="row" style="margin-top: 2%">
                        <div class="col-lg-6 mt-6">
                          <label for="id_card">Người lập:</label>

                          <select name="manhanvien" class="form-select form-select-sm w-100" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <?php

                            $result = $managStaff->getStaff();
                            $i = 1;
                            if ($result != false) {
                              while ($value = $result->fetch_assoc()) {
                            ?>
                                <option value='<?php echo $value['id'] ?>'> <?php echo $value['id'] ?> - <?php echo $value['fullname'] ?> </option>

                            <?php }
                            } ?>
                          </select>
                        </div>

                      </div>


                      <div class="row" style="margin-top: 2%">
                        <div class="col-lg-6 mt-6">
                          <label for="id_card">Hình thức:</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Thanh toán một phần
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Thanh toán nhiều lần
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="row" style="margin-top: 2%">
                        <div class="col-lg-6 mt-6">
                          <label for="id_card">Tổng tiền </label>
                          <input type="number" class="form-control" name="tongtien" id="email" placeholder="Quân 7, Thành phố Hồ Chí Minh" value=<?php echo date("d-m-Y ") ?> required>
                        </div>
                        <div class="col-lg-6 mt-6">
                          <label for='id_card'>Thanh toán lần 1 </label>
                          <input type='number' class='form-control' name='thanhtoan1' id='email' placeholder='Số tiền thanh toán lần 1' required>
                        </div>
                        <div class="row w-50 " id="thanhtoan" style="margin-top: 2%; margin-left:2dx">

                        </div>

                        <div class="modal-footer mt-3">
                          <button name="member" type="submit " class="btn btn-primary">Thêm</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Kết thúc Modal -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

