<?php
if (!isset($_GET['id']) || $_GET['id'] == NULL) {
    echo "<script>window.location='./?q=customer';</script>";
} else {
    $sdt = $_GET['id'];
    echo '<script> toastr.success("Cập nhật thành công!");</script>';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $diachi = $_POST['diachi'];
    $fullname = $_POST['fullname'];
   

    $Personnel = $managStaff->updateCustomer($diachi, $fullname,$sdt);
    if (isset($Personnel)) {
        echo $Personnel;
    }
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
                                            <h5 class="m-b-10">Quản Lý Khách hàng</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href=""><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Chỉnh sửa thông tin khách hàng</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- HIEN THI DANH SACH THONG KE -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <?php
                                    $getCustomerlId = $managStaff->getCustomerlId($sdt);
                                    if ($getCustomerlId != false) {
                                        $value = $getCustomerlId->fetch_assoc();
                                    }
                                    
                                    ?>
                                    <div class="card-header" style="padding-bottom: 10px;">
                                        CHỈNH SỬA THÔNG TIN KHÁCH HÀNG- <span style="text-transform: uppercase;"><?php echo $value['tenKhachHang'] ?></span>
                                    </div>
                                    <div class="card-body pt-1 pb-1">
                                        <div class="modal-body pt-0 pb-0">
                                            <form class="needs-validation" action="" method="POST" novalidate>
                                                <div class="row">
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="fullname">Họ và Tên:</label>
                                                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nhập thông tin..." required value="<?php echo $value['tenKhachHang'] ?>">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="user">Số điện thoại:</label>
                                                        <input type="text" class="form-control" name="sdt" id="user" placeholder="Nhập thông tin..." disabled value="<?php echo $value['sdt'] ?>">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="email">Địa chỉ:</label>
                                                        <input type="text" class="form-control" name="diachi" id="email" placeholder="nguyenvana@gmail.com" required value="<?php echo $value['diaChi'] ?>">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="id_card">CMND/CCCD:</label>
                                                        <input type="text" class="form-control" name="id_card" id="id_card" required disabled value="<?php echo $value['cmnd'] ?>">
                                                    </div>
                                                </div>
                                                <div class="modal-footer mt-3 pt-2 pb-0">
                                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- KET THUC HIEN THI DANH SÁCH THONG KE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>