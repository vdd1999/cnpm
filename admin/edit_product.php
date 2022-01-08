<?php
  // unlink("../uploads/iphone-7-plus-128gb-de-400x460.png");
  require_once('../conn.php');
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getProduct = getDetail($id);
  if ($getProduct['code'] == '0') {
    $data = $getProduct['result'];
    $row = $data->fetch_assoc();
  }
  }

  if (isset($_POST['edit'])) {
    $conn = open_db();
    $tensp = $_POST['tensp'];
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
    $taitrongchophep = $_POST['taitrongchophep'];
    $trongluongbanthan = $_POST['trongluongbanthan'];
    $trongluongtoanbo = $_POST['trongluongtoanbo'];
    $kichthuocxe =$_POST['kichthuocxe'];
    $kichthuoclongthung = $_POST['kichthuoclongthung'];
    $mota = $_POST['mota'];
    $ngoaithat = $_POST['ngoaithat'];
    $noithat = $_POST['noithat'];

    if ($_FILES['filename']['size']  != 0){
        $img = $_FILES['filename']['name'];  
        $file = $_FILES["filename"]["tmp_name"];
        $destination = '../uploads/'.$img;
        move_uploaded_file($file, $destination);   
        //UPDATE BẢNG sanpham
        $sql = 'UPDATE chitietsanpham SET tensp = ?,img = ?,mota = ?,noithat = ?,ngoaithat = ?,trongluongbanthan = ?,taitrongchophep = ?,trongluongtoanbo = ?,kichthuocxe = ?,kichthuoclongthung = ?,loptruocsau = ?,chieudaicoso = ?,cautruoc = ?,causau = ?,songuoichophep = ? ,khoangcachtruc = ? ,vetbanhtruocsau = ?,sotruc = ?,congthucbanhxe = ?,loainhienlieu = ?,nhanhieudongco = ?,congsuatlonnhat = ?,loaidongco = ? ,soluonglop = ?,thetich = ? WHERE id = ?';
        $stm = $conn->prepare($sql);
        $stm->bind_param('sssssssssssssssssssssssssi',$tensp,$img,$mota,$noithat,$ngoaithat,$trongluongbanthan,$taitrongchophep,$trongluongtoanbo,$kichthuocxe,$kichthuoclongthung,$loptruocsau,$chieudaicoso,$cautruoc,$causau,$songuoichophep ,$khoangcachtruc ,$vetbanhtruocsau,$sotruc,$congthucbanhxe,$loainhienlieu,$nhanhieudongco,$congsuatlonnhat,$loaidongco ,$soluonglop,$thetich,$id);
        echo 'Thêm thành công rồi';
        if (!$stm->execute()) {
          echo $stm->error;
        }
    }
    else {
      //UPDATE BẢNG sanpham
      $sql = 'UPDATE chitietsanpham SET tensp = ?,mota = ?,noithat = ?,ngoaithat = ?,trongluongbanthan = ?,taitrongchophep = ?,trongluongtoanbo = ?,kichthuocxe = ?,kichthuoclongthung = ?,loptruocsau = ?,chieudaicoso = ?,cautruoc = ?,causau = ?,songuoichophep = ? ,khoangcachtruc = ? ,vetbanhtruocsau = ?,sotruc = ?,congthucbanhxe = ?,loainhienlieu = ?,nhanhieudongco = ?,congsuatlonnhat = ?,loaidongco = ? ,soluonglop = ?,thetich = ? WHERE id = ?';
      $stm = $conn->prepare($sql);
      $stm->bind_param('ssssssssssssssssssssssssi',$tensp,$mota,$noithat,$ngoaithat,$trongluongbanthan,$taitrongchophep,$trongluongtoanbo,$kichthuocxe,$kichthuoclongthung,$loptruocsau,$chieudaicoso,$cautruoc,$causau,$songuoichophep ,$khoangcachtruc ,$vetbanhtruocsau,$sotruc,$congthucbanhxe,$loainhienlieu,$nhanhieudongco,$congsuatlonnhat,$loaidongco ,$soluonglop,$thetich,$id);
      echo "Thêm thành công";
      if (!$stm->execute()) {
        echo $stm->error;
      }
    }

  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CHỈNH SỬA SẢN PHẨM</title>

  <!-- (1): Khai báo sử dụng thư viện CKEditor -->
  <!--  <script src="../ckeditor/ckeditor.js"></script>-->
  <script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" />
  <!--JAVA SCRIPT-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" rel="stylesheet"/>

  <!-- STYLE-->
  <style>
    #add-product {
      width: 70%;
      justify-content: center;
      margin-left: 15%;
    }
  </style>
</head>
<body>
  <div id="add-product">
    <h1 id="titlesp"></h1>
    <form enctype="multipart/form-data" method="POST" id="add-product-form" action="edit_product.php?id=<?=$id ?>">
    <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="tensp">Tên sản phẩm:</label>
            <input type="text" name="tensp" class="form-control" placeholder="Nhập tên sản phẩm" id="tensp" value=<?=$row['tensp'] ?>>
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
            <label for="trongluongbanthan">Trọng lượng bản thân:</label>
            <input type="text" class="form-control" id="trongluongbanthan" name="trongluongbanthan" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="taitrongchophep">Tải trọng cho phép:</label>
            <input type="text" class="form-control" id="taitrongchophep" name="taitrongchophep" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="trongluongtoanbo">Trọng lượng toàn bộ:</label>
            <input type="text" class="form-control" id="trongluongtoanbo" name="trongluongtoanbo" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="causau">Cầu sau:</label>
            <input type="text" class="form-control" id="causau" name="causau" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="songuoichophep">Số người cho phép chở:</label>
            <input type="text" class="form-control" id="songuoichophep" name="songuoichophep" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="khoangcachtruc">Khoảng cách trục:</label>
            <input type="text" class="form-control" id="khoangcachtruc" name="khoangcachtruc" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="vetbanhtruocsau">Vệt bánh trước sau:</label>
            <input type="text" class="form-control" id="vetbanhtruocsau" name="vetbanhtruocsau" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="sotruc">Số trục:</label>
            <input type="text" class="form-control" id="sotruc" name="sotruc" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="congthucbanhxe">Công thức bánh xe:</label>
            <input type="text" class="form-control" id="congthucbanhxe" name="congthucbanhxe" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="kichthuocxe">Kích thước xe:</label>
            <input type="text" class="form-control" id="kichthuocxe" name="kichthuocxe" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="kichthuoclongthung">Kích thước lòng thùng:</label>
            <input type="text" class="form-control" id="kichthuoclongthung" name="kichthuoclongthung" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="chieudaicoso">Chiều dài cơ sở:</label>
            <input type="text" class="form-control" id="chieudaicoso" name="chieudaicoso" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="loptruocsau">Lốp Trước/sau:</label>
            <input type="text" class="form-control" id="loptruocsau" name="loptruocsau" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="nhanhieudongco">Nhãn hiệu động cơ:</label>
            <input type="text" class="form-control" id="nhanhieudongco" name="nhanhieudongco" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="loaidongco">Loại động cơ:</label>
            <input type="text" class="form-control" id="loaidongco" name="loaidongco" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="thetich">Thể tích:</label>
            <input type="text" class="form-control" id="thetich" name="thetich" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="loainhienlieu">Loai nhiên liệu:</label>
            <input type="text" class="form-control" id="loainhienlieu" name="loainhienlieu" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="congsuatlonnhat">Công suất lớn nhất/tốc độ quay:</label>
            <input type="text" class="form-control" id="congsuatlonnhat" name="congsuatlonnhat" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="soluonglop">Số lượng lốp trên trục:</label>
            <input type="text" class="form-control" id="soluonglop" name="soluonglop" value=<?=$row['tensp'] ?>/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="cautruoc">Cầu trước:</label>
            <input type="text" class="form-control" id="cautruoc" name="cautruoc" value=<?=$row['tensp'] ?>/>
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


      <button type="submit" name="edit" class="btn btn-primary">Sửa</button>
    </form>  
  </div>
  <div hidden id="idsp"><?= $id ?></div>
</body>
<script>
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });


  $(document).ready(function() {
    let id = $('#idsp').html();
    $.ajax({
      url: "../actionProduct.php",
      method: "POST",
      data: {
        action: "editProduct",
        id:id 
      },
      dataType: "JSON",
      success: function(data) {
        console.log(data);
        if (data.code == '0') {
          debugger
          $('#titlesp').html(data.result.tensp);
          $('#tensp').val(data.result.tensp);
          $('#trongluongtoanbo').val(data.result.trongluongtoanbo);
          $('#trongluongbanthan').val(data.result.trongluongbanthan);
          $('#taitrongchophep').val(data.result.taitrongchophep);
          $('#kichthuoclongthung').val(data.result.kichthuoclongthung);
          $('#kichthuocxe').val(data.result.kichthuocxe);
          $('#loptruocsau').val(data.result.loptruocsau);
          $('#chieudaicoso').val(data.result.chieudaicoso);
          $('#cautruoc').val(data.result.cautruoc);
          $('#causau').val(data.result.causau);
          $('#songuoichophep').val(data.result.songuoichophep);
          $('#khoangcachtruc').val(data.result.khoangcachtruc);
          $('#vetbanhtruocsau').val(data.result.vetbanhtruocsau);
          $('#sotruc').val(data.result.sotruc);
          $('#congthucbanhxe').val(data.result.congthucbanhxe);
          $('#loainhienlieu').val(data.result.loainhienlieu);
          $('#nhanhieudongco').val(data.result.nhanhieudongco);
          $('#thetich').val(data.result.thetich);
          $('#congsuatlonnhat').val(data.result.congsuatlonnhat);
          $('#loaidongco').val(data.result.loaidongco);
          $('#soluonglop').val(data.result.soluonglop);
          CKEDITOR.instances['mota'].setData(data.result.mota);
          CKEDITOR.instances['ngoaithat'].setData(data.result.ngoaithat);
          CKEDITOR.instances['noithat'].setData(data.result.noithat);
        }
      },
      error: function(data) {
        console.log(data);
      }
    })
  })
</script>
</html>