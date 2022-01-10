<?php
if (!isset($_GET['id']) || $_GET['id'] == NULL) {
    echo "<script>window.location='./?q=contract';</script>";
} else {
    $id = $_GET['id'];
    echo '<script> toastr.success("Cập nhật thành công!");</script>';
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if( isset( $_POST['thanhToan2']))
    {
    $thanhToan2 = $_POST['thanhToan2'];
    }
    else
    {
    $thanhToan2=0;
    }
    if( isset( $_POST['thanhToan3']))
    {
    $thanhToan2 = $_POST['thanhToan3'];
    }
    else
    {
    $thanhToan2=0;
    }


   

    $Personnel = $managStaff-> updateContract($thanhToan1, $thanhToan2,$id);
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
                                            <h5 class="m-b-10">Quản Lý hợp đồng</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href=""><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Chỉnh sửa thông tin hợp đồng</a></li>
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
                                    $getContractlId = $managStaff->getContractlId($id);
                                    if ($getContractlId!= false) {
                                        $value = $getContractlId->fetch_assoc();
                                    }
                                    
                                    ?>
                                    <div class="card-header" style="padding-bottom: 10px;">
                                        CHỈNH SỬA THÔNG TIN HỢP ĐỒNG <span style="text-transform: uppercase;"><?php echo $value['maHopDong'] ?></span>
                                    </div>
                                    <div class="card-body pt-1 pb-1">
                                        <div class="modal-body pt-0 pb-0">
                                            <form class="needs-validation" action="" method="POST" novalidate>
                                                <div class="row">
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="fullname">Mã hợp đồng:</label>
                                                        <input type="text" class="form-control" name="fullname" id="fullname" required disabled placeholder="Nhập thông tin..." required value="<?php echo $value['maHopDong'] ?>">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="user">Số điện thoại:</label>
                                                        <input type="text" class="form-control" name="sdt" id="user" required disabled placeholder="Nhập thông tin..." disabled value="<?php echo $value['maKH'] ?>">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="email">Ngày Tạo:</label>
                                                        <input type="text" class="form-control" name="diachi" id="email"  required disabled placeholder="nguyenvana@gmail.com" required value="<?php echo $value['ngayTao'] ?>">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="id_card">Nội dung :</label>
                                                        <textarea type="text" class="form-control" name="id_card" id="id_card" required disabled value="<?php echo $value['noiDung'] ?>"> </textarea>
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="id_card">Tổng Tiền:</label>
                                                        <input type="text" class="form-control" name="id_card" id="id_card" required disabled value="<?php echo $value['tongTien'] ?>">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="id_card">Hình thức thanh toán:</label>
                                                        <input type="text" class="form-control" name="id_card" id="id_card" required disabled value="<?php echo $value['hinhThuc'] ?>">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="id_card">Thanh toán lần 1:</label>
                                                        <input type="text" class="form-control" name="id_card" id="thanhToan1" required disabled value="<?php echo $value['thanhToan1'] ?>">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="id_card">Thanh toán lần 2:</label>
                                                        <input type="text" class="form-control" name="thanhtoan2" id="id_card"  <?php if($value['thanhToan2']!=0 ){echo 'required disabled';} ?> value="<?php echo $value['thanhToan2'] ?>">
                                                        
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="id_card">Thanh toán lần 3:</label>
                                                        <input type="text" class="form-control" name="thanhtoan3" id="id_card" <?php if($value['thanhToan3']!=0 && $value['thanhToan2']!=0){echo 'required disabled';} ?>  value="<?php echo $value['thanhToan3'] ?>">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="id_card">Số tiền đã trã:</label>
                                                        <input type="text" class="form-control" name="id_card" id="id_card" required disabled value="<?php echo $value['soTienDaTra'] ?>">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="id_card">Số tiền còn lại:</label>
                                                        <input type="text" class="form-control" name="id_card" id="id_card" required disabled value="<?php echo (int)($value['tongTien']- $value['soTienDaTra'])?>">
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