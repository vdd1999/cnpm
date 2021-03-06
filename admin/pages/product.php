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
                                            <h5 class="m-b-10">Qu???n L?? S???n Ph???m</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href=""><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Qu???n L?? S???n Ph???m</a></li>
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
                                            DANH S??CH S???N PH???M
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addproduct"><i class="fa fa-edit"></i>&nbsp; Th??m s???n ph???m</button>
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
                                                                    <th scope="row " style="width: 25%; ">T??n xe</th>
                                                                    <th scope="row " style="width: 10%; ">H??ng xe</th>
                                                                    <th scope="row " style="width: 15%; ">Gi??</th>
                                                                    <th scope="row " style="width: 15%; ">???nh</th>
                                                                    <th scope="row " style="width: 18%; ">M?? t???</th>
                                                                    <th scope="row " style="width: 15%; ">N???i th???t</th>
                                                                    <th scope="row " style="width: 10%; ">Ngo???i th???t</th>
                                                                    <th scope="row " style="width: 15%; ">Chi???u d??i c?? s???</th>
                                                                    <th scope="row " style="width: 15%; ">Tr???ng l?????ng b???n th??n</th>
                                                                    <th scope="row " style="width: 15%; ">C???u tr?????c</th>
                                                                    <th scope="row " style="width: 25%; ">C???u sau</th>
                                                                    <th scope="row " style="width: 10%; ">T???i tr???ng cho ph??p</th>
                                                                    <th scope="row " style="width: 15%; ">Tr???ng l?????ng to??n b???</th>
                                                                    <th scope="row " style="width: 15%; ">V???t b??nh tr?????c sau</th>
                                                                    <th scope="row " style="width: 25%; ">K??ch th?????c xe</th>
                                                                    <th scope="row " style="width: 15%; ">K??ch th?????c l???ng th??ng</th>
                                                                    <th scope="row " style="width: 10%; ">L???p tr?????c sau</th>
                                                                    <th scope="row " style="width: 15%; ">S??? ng?????i cho ph??p</th>
                                                                    <th scope="row " style="width: 15%; ">Kho???ng c??ch tr???c</th>
                                                                    <th scope="row " style="width: 15%; ">S??? tr???c</th>
                                                                    <th scope="row " style="width: 10%; ">C??ng th???c b??nh xe</th>
                                                                    <th scope="row " style="width: 15%; ">Lo???i nhi??n li???u</th>
                                                                    <th scope="row " style="width: 15%; ">Nh??n hi???u ?????ng c??</th>
                                                                    <th scope="row " style="width: 15%; ">Lo???i ?????ng c??</th>
                                                                    <th scope="row " style="width: 15%; ">Th??? t??ch</th>
                                                                    <th scope="row " style="width: 10%; ">C??ng su???t l???n nh???t</th>
                                                                    <th scope="row " style="width: 15%; ">S??? l?????ng l???p</th>
                                                                    <th scope="row " style="width: 15%; ">Ng??y t???o</th>
                                                                    <th class="text-center" scope="row " style="width: 5%; ">Thao t??c</th>
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
                                                                        <a class="btn btn-danger" style="margin: 0; padding: 2px 10px;" onclick="return confirm('H??y c??n nh???c k??? tr?????c khi x??a?');"  href="?q=product&id=<?php echo $deleteproduct['id'] ?> type="submit"><i class="fa fa-trash " style="margin-right: 0;"></i></a>
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
                                        <h5 class="modal-title" id="addmemberLabel">Th??m S???n Ph???m</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">??</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" enctype="multipart/form-data" id="add-product-form"  action="./?q=product" method="POST" novalidate>
                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="tensp">T??n s???n ph???m:</label>
                                                    <input type="text" name="tensp" class="form-control" placeholder="Nh???p t??n s???n ph???m" id="tensp" >
                                                </div>  
                                                </div>
                                                <div class="col">
                                                <div class="form-gorup">
                                                    <label for="img">H??nh ???nh</label>
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
                                                    <label for="hangxe">H??ng xe</label>
                                                    <input type="text" name="hangxe" class="form-control" placeholder="Nh???p t??n s???n ph???m" id="hangxe">
                                                </div>  
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="price">Gi??:</label>
                                                    <input type="number" name="price" class="form-control" placeholder="Nh???p t??n s???n ph???m" id="price">
                                                </div>  
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="trongluongbanthan">Tr???ng l?????ng b???n th??n:</label>
                                                    <input type="text" class="form-control" id="trongluongbanthan" name="trongluongbanthan">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="taitrongchophep">T???i tr???ng cho ph??p:</label>
                                                    <input type="text" class="form-control" id="taitrongchophep" name="taitrongchophep">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="trongluongtoanbo">Tr???ng l?????ng to??n b???:</label>
                                                    <input type="text" class="form-control" id="trongluongtoanbo" name="trongluongtoanbo">
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="causau">C???u sau:</label>
                                                    <input type="text" class="form-control" id="causau" name="causau">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="songuoichophep">S??? ng?????i cho ph??p ch???:</label>
                                                    <input type="text" class="form-control" id="songuoichophep" name="songuoichophep" >
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="khoangcachtruc">Kho???ng c??ch tr???c:</label>
                                                    <input type="text" class="form-control" id="khoangcachtruc" name="khoangcachtruc" >
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="vetbanhtruocsau">V???t b??nh tr?????c sau:</label>
                                                    <input type="text" class="form-control" id="vetbanhtruocsau" name="vetbanhtruocsau">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="sotruc">S??? tr???c:</label>
                                                    <input type="text" class="form-control" id="sotruc" name="sotruc">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="congthucbanhxe">C??ng th???c b??nh xe:</label>
                                                    <input type="text" class="form-control" id="congthucbanhxe" name="congthucbanhxe" >
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="kichthuocxe">K??ch th?????c xe:</label>
                                                    <input type="text" class="form-control" id="kichthuocxe" name="kichthuocxe">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="kichthuoclongthung">K??ch th?????c l??ng th??ng:</label>
                                                    <input type="text" class="form-control" id="kichthuoclongthung" name="kichthuoclongthung">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="chieudaicoso">Chi???u d??i c?? s???:</label>
                                                    <input type="text" class="form-control" id="chieudaicoso" name="chieudaicoso" >
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="loptruocsau">L???p Tr?????c/sau:</label>
                                                    <input type="text" class="form-control" id="loptruocsau" name="loptruocsau" >
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="nhanhieudongco">Nh??n hi???u ?????ng c??:</label>
                                                    <input type="text" class="form-control" id="nhanhieudongco" name="nhanhieudongco" >
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="loaidongco">Lo???i ?????ng c??:</label>
                                                    <input type="text" class="form-control" id="loaidongco" name="loaidongco">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="thetich">Th??? t??ch:</label>
                                                    <input type="text" class="form-control" id="thetich" name="thetich" >
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="loainhienlieu">Loai nhi??n li???u:</label>
                                                    <input type="text" class="form-control" id="loainhienlieu" name="loainhienlieu">
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="congsuatlonnhat">C??ng su???t l???n nh???t/t???c ????? quay:</label>
                                                    <input type="text" class="form-control" id="congsuatlonnhat" name="congsuatlonnhat" >
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="soluonglop">S??? l?????ng l???p tr??n tr???c:</label>
                                                    <input type="text" class="form-control" id="soluonglop" name="soluonglop">
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label for="cautruoc">C???u tr?????c:</label>
                                                    <input type="text" class="form-control" id="cautruoc" name="cautruoc" >
                                                </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="mota">Nh???p m?? t???</label>
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
                                                <label for="noithat">Nh???p m?? t??? v??? ngo???i th???t</label>
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
                                                <label for="ngoaithat">Nh???p m?? t??? v??? n???i th???t</label>
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
                                                <button name="addproduct" type="submit" class="btn btn-primary">Th??m s???n ph???m</button>
                                            </div>
                                            </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- K???t th??c Modal -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>