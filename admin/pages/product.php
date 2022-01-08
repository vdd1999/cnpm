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
                                            <li class="breadcrumb-item"><a href="#!">Quản Lý Sản Phẩm</a></li>
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
                                            DANH SÁCH SẢN PHẨM
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmember"><i class="fa fa-edit"></i>&nbsp; Thêm sản phẩm</button>
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
                                                                    <th scope="row " style="width: 10%; ">Tên xe</th>
                                                                    <th scope="row " style="width: 25%; ">Hãng xe</th>
                                                                    <th scope="row " style="width: 15%; ">Giá</th>
                                                                    <th scope="row " style="width: 25%; ">Tình trạng</th>
                                                                    <th scope="row " style="width: 25%; ">Trạng thái</th>
                                                                    <th class="text-center" scope="row " style="width: 5%; ">Thao tác</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Honda Wave i125</td>
                                                                    <td>Honda</td>
                                                                    <td>72000000 VNĐ</td>
                                                                    <td>Mới</td>
                                                                    <td>Còn hàng</td>
                                                                    <td class="text-center ">
                                                                        <a class="btn btn-primary" style="margin: 0; padding: 2px 8px;" href="?q=updatestaff&id=<?php echo $value['id'] ?>"><i class="fa fa-edit" style="margin-right: 0;"></i></a>
                                                                        <a class="btn btn-danger" style="margin: 0; padding: 2px 10px;" onclick="return confirm('Hãy cân nhắc kỹ trước khi xóa?');" href="?q=staff&id=<?php echo $value['id'] ?>" type="submit"><i class="fa fa-trash " style="margin-right: 0;"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="row " style="width: 5%; ">#</th>
                                                                    <th scope="row " style="width: 10%; ">Tên xe</th>
                                                                    <th scope="row " style="width: 25%; ">Hãng xe</th>
                                                                    <th scope="row " style="width: 15%; ">Giá</th>
                                                                    <th scope="row " style="width: 25%; ">Tình trạng</th>
                                                                    <th scope="row " style="width: 25%; ">Trạng thái</th>
                                                                    <th class="text-center" scope="row " style="width: 5%; ">Thao tác</th>
                                                                </tr>
                                                            </thead>
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
                                        <h5 class="modal-title" id="addmemberLabel">Thêm Nhân Viên</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" action="./?q=staff" method="POST" novalidate>
                                            <div class="row">
                                                <div class="col-lg-4 mt-3">
                                                    <label for="fullname">Họ và Tên:</label>
                                                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nguyễn Văn A" required>
                                                </div>
                                                <div class="col-lg-4 mt-3">
                                                    <label for="user">Tên người dùng:</label>
                                                    <input type="text" class="form-control" name="user" id="user" placeholder="nguyenvana" required>
                                                </div>
                                                <div class="col-lg-4 mt-3">
                                                    <label for="id_card">CMND/CCCD:</label>
                                                    <input type="text" class="form-control" name="id_card" id="id_card" placeholder="352512xxx" required>
                                                </div>
                                                <div class="modal-footer mt-3">
                                                    <button name="member" type="submit " class="btn btn-primary">Thêm nhân viên</button>
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