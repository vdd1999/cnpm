<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $descriptions = $_POST['descriptions'];
    $checkCarCompany = $carcompany->setCarCompany($name, $descriptions);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $checkCarCompany = $carcompany->deleteCarCompany($id);
}

if (isset($checkCarCompany)) {
    echo $checkCarCompany;
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
                                            <h5 class="m-b-10">Quản Lý Hãng Xe</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href=""><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Danh mục hãng xe</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- HIEN THI DANH HÃNG XE -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header" style="padding-bottom: 0px; padding-top: 10px;">
                                        <div class="float-left p-2">
                                            DANH MỤC HÃNG XE
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmember"><i class="fa fa-edit"></i>&nbsp; Thêm hãng xe</button>
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
                                                                    <th scope="row " style="width: 25%; ">Hãng xe</th>
                                                                    <th scope="row " style="width: 40%; ">Mỗ tả</th>
                                                                    <th class="text-center" scope="row " style="width: 5%; ">Thao tác</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $result = $carcompany->getCarCompany();
                                                                $i = 1;
                                                                if ($result != false) {
                                                                    while ($value = $result->fetch_assoc()) {
                                                                ?>
                                                                        <tr>
                                                                            <td><?php echo $i++ ?></td>
                                                                            <td><?php echo $value['name'] ?></td>
                                                                            <td> <?php echo $fm->textShorten($value['descriptions'], 90); ?></td>
                                                                            <td class="text-center ">
                                                                                <a class="btn btn-primary" style="margin: 0; padding: 2px 8px;" href="?q=updatecarcompany&id=<?php echo $value['id'] ?>"><i class="fa fa-edit" style="margin-right: 0;"></i></a>
                                                                                <a class="btn btn-danger" style="margin: 0; padding: 2px 10px;" onclick="return confirm('Hãy cân nhắc kỹ trước khi xóa?');" href="?q=carcompany&id=<?php echo $value['id'] ?>" type="submit"><i class="fa fa-trash " style="margin-right: 0;"></i></a>
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
                        <!-- KET THUC HIEN THI DANH HÃNG XE -->

                        <!-- [Modal] -->
                        <div class="modal fade" id="addmember" tabindex="-1" role="dialog" aria-labelledby="addmemberLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addmemberLabel">Thêm Hãng xe</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" action="./?q=carcompany" method="POST" novalidate>
                                            <div class="form-group">
                                                <label for="name">Tên hãng xe:</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Honda" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="descriptions">Mô tả:</label>
                                                <textarea class="form-control" name="descriptions" id="descriptions" rows="6"></textarea>
                                            </div>
                                            <div class="modal-footer mt-3">
                                                <button type="submit" class="btn btn-primary">Thêm hãng xe</button>
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