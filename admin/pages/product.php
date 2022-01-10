<?php
$getSanPham = getSanpham();
if ($getSanPham['code'] == 0) {
    $kh = $getSanPham['result'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['addproduct'])) {
    $tensp = $_POST['tensp'];
    $hangxe = $_POST['hangxe'];
    $price = intval($_POST['price']);
    if ($_FILES['filename']['size']  != 0){
        $img = $_FILES['filename']['name'];  
        $file = $_FILES["filename"]["tmp_name"];
        $destination = '../uploads/'.$img;
        move_uploaded_file($file, $destination);    
    }
    $chieudaicoso = $_POST['chieudaicoso'];
    $cautruoc = $_POST['cautruoc'];
    $causau = $_POST['causau'];
    $songuoichophep = $_POST['songuoichophep'];
    $khoangcachtruc = $_POST['khoangcachtruc'];
    $vetbanhtruocsau = $_POST['vetbanhtruocsau'];
    $sotruc = $_POST['sotruc'];
    $congthucbanhxe = $_POST['congthucbanhxe'];
    $loainhienlieu = $_POST['loainhienlieu'];
    $nhanhieudongco = $_POST['nhanhieudongco'];
    $thetich = $_POST['thetich'];
    $congsuatlonnhat = $_POST['congsuatlonnhat'];
    $loaidongco = $_POST['loaidongco'];
    $soluonglop = $_POST['soluonglop'];
    $loptruocsau = $_POST['loptruocsau'];
    $taitrongchophep = $_POST['taitrongchophep'];
    $trongluongbanthan = $_POST['trongluongbanthan'];
    $trongluongtoanbo = $_POST['trongluongtoanbo'];
    $kichthuocxe =$_POST['kichthuocxe'];
    $kichthuoclongthung = $_POST['kichthuoclongthung'];
    $mota = $_POST['mota'];
    $ngoaithat = $_POST['ngoaithat'];
    $noithat = $_POST['noithat'];
    $conn = open_db();
    $sql = 'INSERT INTO chitietsanpham(tensp, hangxe, price, img, mota, noithat, ngoaithat, chieudaicoso, trongluongbanthan, cautruoc, causau, taitrongchophep, trongluongtoanbo, vetbanhtruocsau, kichthuocxe, kichthuoclongthung, loptruocsau, songuoichophep, khoangcachtruc, sotruc, congthucbanhxe, loainhienlieu, nhanhieudongco, loaidongco, thetich, congsuatlonnhat, soluonglop) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
    $stm = $conn->prepare($sql);

    $stm->bind_param('ssissssssssssssssssssssssss',$tensp,$hangxe,$price,$img,$mota,$noithat,$ngoaithat,$chieudaicoso,$trongluongbanthan,$cautruoc,$causau,$taitrongchophep,$trongluongtoanbo,$vetbanhtruocsau,$kichthuocxe,$kichthuoclongthung,$loptruocsau,$songuoichophep ,$khoangcachtruc ,$sotruc,$congthucbanhxe,$loainhienlieu,$nhanhieudongco ,$loaidongco ,$thetich, $congsuatlonnhat,$soluonglop);

    if (!$stm->execute()) {
        echo $stm->error;
    }
    if (isset($_POST['them'])) {
        $id = $_POST['idDangki'];
        $result = updateStatus(intval($id));
    } else {
        echo "not oke";
    }
  }
}
// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     $deleteProduct = $deleteProduct->deleteProduct($id);
// }
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
                                            <li class="breadcrumb-item"><a href="#!">Quản Lý Sản Phẩm</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- HIEN THI DANH SACH SAN PHAM -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header" style="padding-bottom: 0px; padding-top: 10px;">
                                        <div class="float-left p-2">
                                            DANH SÁCH SẢN PHẨM
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addproduct"><i class="fa fa-edit"></i>&nbsp; Thêm sản phẩm</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="dt-responsive table-responsive">
                                            <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                <form method="POST" action="./?q=product">
                                                    <div class="col-sm-12">
                                                        <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="row " style="width: 5%; ">#</th>
                                                                    <th scope="row " style="width: 25%; ">Tên xe</th>
                                                                    <th scope="row " style="width: 10%; ">Hãng xe</th>
                                                                    <th scope="row " style="width: 15%; ">Giá</th>
                                                                    <th scope="row " style="width: 15%; ">Ảnh</th>
                                                                    <th scope="row " style="width: 18%; ">Mô tả</th>
                                                                    <th scope="row " style="width: 15%; ">Nội thất</th>
                                                                    <th scope="row " style="width: 10%; ">Ngoại thất</th>
                                                                    <th scope="row " style="width: 15%; ">Chiều dài cơ số</th>
                                                                    <th scope="row " style="width: 15%; ">Trọng lượng bản thân</th>
                                                                    <th scope="row " style="width: 15%; ">Cầu trước</th>
                                                                    <th scope="row " style="width: 25%; ">Cầu sau</th>
                                                                    <th scope="row " style="width: 10%; ">Tải trọng cho phép</th>
                                                                    <th scope="row " style="width: 15%; ">Trọng lượng toàn bộ</th>
                                                                    <th scope="row " style="width: 15%; ">Vệt bánh trước sau</th>
                                                                    <th scope="row " style="width: 25%; ">Kích thước xe</th>
                                                                    <th scope="row " style="width: 15%; ">Kích thước lồng thùng</th>
                                                                    <th scope="row " style="width: 10%; ">Lốp trước sau</th>
                                                                    <th scope="row " style="width: 15%; ">Số người cho phép</th>
                                                                    <th scope="row " style="width: 15%; ">Khoảng cách trục</th>
                                                                    <th scope="row " style="width: 15%; ">Số trục</th>
                                                                    <th scope="row " style="width: 10%; ">Công thức bánh xe</th>
                                                                    <th scope="row " style="width: 15%; ">Loại nhiên liệu</th>
                                                                    <th scope="row " style="width: 15%; ">Nhãn hiệu động cơ</th>
                                                                    <th scope="row " style="width: 15%; ">Loại động cơ</th>
                                                                    <th scope="row " style="width: 15%; ">Thể tích</th>
                                                                    <th scope="row " style="width: 10%; ">Công suất lớn nhất</th>
                                                                    <th scope="row " style="width: 15%; ">Số lượng lốp</th>
                                                                    <th scope="row " style="width: 15%; ">Ngày tạo</th>
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
                                                                    <td> <?= $row['tensp'] ?></td>
                                                                    <td> <?= $row['hangxe'] ?></td>
                                                                    <td> <?= $row['price'] ?></td>
                                                                    <td> <?= $row['img'] ?></td>
                                                                    <td> <?= $row['mota'] ?></td>
                                                                    <td> <?= $row['noithat'] ?></td>
                                                                    <td> <?= $row['ngoaithat'] ?></td>
                                                                    <td> <?= $row['chieudaicoso'] ?></td>
                                                                    <td> <?= $row['trongluongbanthan'] ?></td>
                                                                    <td> <?= $row['cautruoc'] ?></td>
                                                                    <td> <?= $row['causau'] ?></td>
                                                                    <td> <?= $row['taitrongchophep'] ?></td>
                                                                    <td> <?= $row['trongluongtoanbo'] ?></td>
                                                                    <td> <?= $row['vetbanhtruocsau'] ?></td>
                                                                    <td> <?= $row['kichthuocxe'] ?></td>
                                                                    <td> <?= $row['kichthuoclongthung'] ?></td>
                                                                    <td> <?= $row['loptruocsau'] ?></td>
                                                                    <td> <?= $row['songuoichophep'] ?></td>
                                                                    <td> <?= $row['khoangcachtruc'] ?></td>
                                                                    <td> <?= $row['sotruc'] ?></td>
                                                                    <td> <?= $row['congthucbanhxe'] ?></td>
                                                                    <td> <?= $row['loainhienlieu'] ?></td>
                                                                    <td> <?= $row['nhanhieudongco'] ?></td>
                                                                    <td> <?= $row['loaidongco'] ?></td>
                                                                    <td> <?= $row['thetich'] ?></td>
                                                                    <td> <?= $row['congsuatlonnhat'] ?></td>
                                                                    <td> <?= $row['soluonglop'] ?></td>
                                                                    <td> <?= $row['ngaytao'] ?></td>

                                                                    <td class="text-center">
                                                                        <a class="btn btn-primary" style="margin: 0; padding: 2px 8px;" href=""><i class="fas fa-check-circle" style="margin-right: 0;"></i></a>
                                                                        <a class="btn btn-danger" style="margin: 0; padding: 2px 10px;" onclick="return confirm('Hãy cân nhắc kỹ trước khi xóa?');"  href="?q=product&id=<?php echo $deleteproduct['id'] ?> type="submit"><i class="fa fa-trash " style="margin-right: 0;"></i></a>
                                                                    </td>
                                                                </tr> 
                                                                <?php
                                                                }
                                                                ?>
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </form> 
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- KET THUC HIEN THI DANH SACH SAN PHAM -->

                        <!-- [Modal] -->
                        <div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="addmemberLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addmemberLabel">Thêm Sản Phẩm</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" enctype="multipart/form-data" id="add-product-form"  action="./?q=product" method="POST" novalidate>
                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="tensp">Tên sản phẩm:</label>
                                                    <input type="text" name="tensp" class="form-control" placeholder="Nhập tên sản phẩm" id="tensp" >
                                                </div>  
                                                </div>
                                                <div class="col">
                                                <div class="form-gorup">
                                                    <label for="img">Hình ảnh</label>
                                                    <div class="custom-file mb-3">
                                                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="hangxe">Hãng xe</label>
                                                    <input type="text" name="hangxe" class="form-control" placeholder="Nhập tên sản phẩm" id="hangxe">
                                                </div>  
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="price">Giá:</label>
                                                    <input type="number" name="price" class="form-control" placeholder="Nhập tên sản phẩm" id="price">
                                                </div>  
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="trongluongbanthan">Trọng lượng bản thân:</label>
                                                    <input type="text" class="form-control" id="trongluongbanthan" name="trongluongbanthan">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="taitrongchophep">Tải trọng cho phép:</label>
                                                    <input type="text" class="form-control" id="taitrongchophep" name="taitrongchophep">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="trongluongtoanbo">Trọng lượng toàn bộ:</label>
                                                    <input type="text" class="form-control" id="trongluongtoanbo" name="trongluongtoanbo">
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="causau">Cầu sau:</label>
                                                    <input type="text" class="form-control" id="causau" name="causau">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="songuoichophep">Số người cho phép chở:</label>
                                                    <input type="text" class="form-control" id="songuoichophep" name="songuoichophep" >
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="khoangcachtruc">Khoảng cách trục:</label>
                                                    <input type="text" class="form-control" id="khoangcachtruc" name="khoangcachtruc" >
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="vetbanhtruocsau">Vệt bánh trước sau:</label>
                                                    <input type="text" class="form-control" id="vetbanhtruocsau" name="vetbanhtruocsau">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="sotruc">Số trục:</label>
                                                    <input type="text" class="form-control" id="sotruc" name="sotruc">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="congthucbanhxe">Công thức bánh xe:</label>
                                                    <input type="text" class="form-control" id="congthucbanhxe" name="congthucbanhxe" >
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="kichthuocxe">Kích thước xe:</label>
                                                    <input type="text" class="form-control" id="kichthuocxe" name="kichthuocxe">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="kichthuoclongthung">Kích thước lòng thùng:</label>
                                                    <input type="text" class="form-control" id="kichthuoclongthung" name="kichthuoclongthung">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="chieudaicoso">Chiều dài cơ sở:</label>
                                                    <input type="text" class="form-control" id="chieudaicoso" name="chieudaicoso" >
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="loptruocsau">Lốp Trước/sau:</label>
                                                    <input type="text" class="form-control" id="loptruocsau" name="loptruocsau" >
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="nhanhieudongco">Nhãn hiệu động cơ:</label>
                                                    <input type="text" class="form-control" id="nhanhieudongco" name="nhanhieudongco" >
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="loaidongco">Loại động cơ:</label>
                                                    <input type="text" class="form-control" id="loaidongco" name="loaidongco">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="thetich">Thể tích:</label>
                                                    <input type="text" class="form-control" id="thetich" name="thetich" >
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="loainhienlieu">Loai nhiên liệu:</label>
                                                    <input type="text" class="form-control" id="loainhienlieu" name="loainhienlieu">
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="congsuatlonnhat">Công suất lớn nhất/tốc độ quay:</label>
                                                    <input type="text" class="form-control" id="congsuatlonnhat" name="congsuatlonnhat" >
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="soluonglop">Số lượng lốp trên trục:</label>
                                                    <input type="text" class="form-control" id="soluonglop" name="soluonglop">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="cautruoc">Cầu trước:</label>
                                                    <input type="text" class="form-control" id="cautruoc" name="cautruoc" >
                                                </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="mota">Nhập mô tả</label>
                                                <textarea id="mota" name="mota" cols="50" rows="10"></textarea>
                                                <script>
                                                $(document).ready(function() {
                                                    CKEDITOR.replace( 'mota',{
                                                    height: 400,
                                                    filebrowserUploadUrl: "upload.php"
                                                    });
                                                })
                                                </script>
                                            </div>

                                            <div class="form-group">
                                                <label for="noithat">Nhập mô tả về ngoại thất</label>
                                                <textarea id="ngoaithat" name="ngoaithat" cols="50" rows="10"></textarea>
                                                <script>
                                                $(document).ready(function() {
                                                    CKEDITOR.replace( 'ngoaithat',{
                                                    height: 400,
                                                    extraPlugins : 'filebrowser',
                                                    filebrowserBrowseUrl:'browser.php?type=Images',
                                                    filebrowserUploadMethod:"form",
                                                    filebrowserUploadUrl:"upload.php"
                                                    });
                                                })
                                                </script>
                                            </div>

                                            <div class="form-group">
                                                <label for="ngoaithat">Nhập mô tả về nội thất</label>
                                                <textarea id="noithat" name="noithat" cols="50" rows="10"></textarea>
                                                <script>
                                                $(document).ready(function() {
                                                    CKEDITOR.replace( 'noithat',{
                                                    height: 400,
                                                    filebrowserUploadUrl: "upload.php"
                                                    });
                                                })
                                                </script>
                                            </div>


                                            <div class="modal-footer mt-3">
                                                <button name="addproduct" type="submit" class="btn btn-primary">Thêm sản phẩm</button>
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