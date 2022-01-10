<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['them'])) {
            $id = $_POST['idDangki'];
            $result = updateStatus(intval($id));
        }
    }

    $getDangKiLaiThu = getDangKiLaiThu();
    if ($getDangKiLaiThu['code'] == 0) {
      $kh = $getDangKiLaiThu['result'];
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
                                            <h5 class="m-b-10">Quản Lý Đăng Kí</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href=""><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Quản Lý Đăng Kí</a></li>
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
                                            DANH SÁCH ĐĂNG KÍ
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="dt-responsive table-responsive">
                                            <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <form method="POST" action="./?q=driver">
                                                            <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="row " style="width: 5%; ">STT</th>
                                                                        <th scope="row " style="width: 10%; ">Họ tên</th>
                                                                        <th scope="row " style="width: 25%; ">Email</th>
                                                                        <th scope="row " style="width: 25%; ">Số điện thoại</th>
                                                                        <th scope="row " style="width: 15%; ">Mã xe</th>
                                                                        <th scope="row " style="width: 25%; ">Ngày đăng kí</th>
                                                                        <th scope="row " style="width: 25%; ">Trạng thái</th>
                                                                        <th class="text-center" scope="row " style="width: 5%; ">Thao tác</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        $stt = 0;
                                                                        while ($row = $kh->fetch_assoc()) {
                                                                    ?>
                                                                    <tr>
                                                                        <td><?= $stt +=1 ?></td>
                                                                        <td> <?= $row['hoten'] ?></td>
                                                                        <td> <?= $row['sdt'] ?></td>
                                                                        <td> <?= $row['email'] ?></td>
                                                                        <td> <?= $row['maxe'] ?></td>
                                                                        <td><?= date('d M,Y',strtotime($row['ngaydangki'])) ?></td>
                                                                        <td><button class="btn btn-danger"><?= ($row['trangthai'] == 0) ? "WAITING" : "DONE"?></button></td>
                                                                        <td hidden><input name="idDangki" type="text" value="<?= $row['id'] ?>"></td>
                                                                        <td class="text-center">
                                                                            <button type="submit" name="them">
                                                                                <a class="btn btn-primary" style="margin: 0; padding: 2px 8px;" href=""><i class="fas fa-check-circle" style="margin-right: 0;"></i></a>
                                                                            </button>
                                                                            <a class="btn btn-danger" style="margin: 0; padding: 2px 10px;" onclick="return confirm('Hãy cân nhắc kỹ trước khi xóa?');" href="" type="submit"><i class="fa fa-trash " style="margin-right: 0;"></i></a>
                                                                        </td>
                                                                    </tr> 
                                                                    <?php
                                                                    }
                                                                    ?> 
                                                                </tbody>
                                                            </table>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- KET THUC HIEN THI DANH SACH THANH VIEN -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>