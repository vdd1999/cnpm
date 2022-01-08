<?php
if (!isset($_GET['id']) || $_GET['id'] == NULL) {
    echo "<script>window.location='./?q=carcompany';</script>";
} else {
    $id = $_GET['id'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $descriptions = $_POST['descriptions'];

    $updateCarCompany = $carcompany->updateCarCompany($id, $name, $descriptions);
    if (isset($updateCarCompany)) {
        echo $updateCarCompany;
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
                                            <h5 class="m-b-10">Quản Lý Sản Phẩm</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href=""><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Chỉnh sửa hãng xe</a></li>
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
                                    $getCarCompanyId = $carcompany->getCarCompanyId($id);
                                    if ($getCarCompanyId != false) {
                                        $value = $getCarCompanyId->fetch_assoc();
                                    }
                                    ?>
                                    <div class="card-header" style="padding-bottom: 10px;">
                                        CHỈNH SỬA HÃNG XE - <span style="text-transform: uppercase;"><?php echo $value['name'] ?></span>
                                    </div>
                                    <div class="card-body pt-1 pb-1">
                                        <div class="modal-body pt-2 pb-0">
                                            <form class="needs-validation" action="" method="POST" novalidate>
                                                <div class="form-group">
                                                    <label for="name">Tên hãng xe:</label>
                                                    <input type="text" value="<?php echo $value['name'] ?>" class="form-control" name="name" id="name" placeholder="Honda" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="descriptions">Mô tả:</label>
                                                    <textarea class="form-control" name="descriptions" id="descriptions" rows="6"><?php echo $value['descriptions'] ?></textarea>
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