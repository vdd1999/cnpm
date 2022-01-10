<?php
	define('servername','localhost');
	define('username','root');
	define('password','');
	define('db','cnpm');
	// Import PHPMailer classes into the global namespace
	// These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	// Load Composer's autoloader
	function open_db() {
		$conn = new mysqli(servername, username, password, db);
		
		if ($conn->connect_error) {
			die($conn->connect_error);
		}
		return $conn;
	}

	//ĐĂNG NHẬP
	function login ($user, $pass) {
		$sql = "select * from taikhoan where taikhoan = ?";
		$conn = open_db();
		$stm =$conn->prepare($sql);
		$stm->bind_param('s', $user);
		if (!$stm -> execute()) {
			return array('code' => 1,'error'=>'Cannot execute command');
		}

		$result = $stm->get_result();

		if ($result->num_rows == 0) {
			return array('code' => 1,'error'=>'Account does not exist');
		}
		$data = $result->fetch_assoc();
		$hash_pass = $data['matkhau'];
		if (!password_verify($pass, $hash_pass)) {
			return array('code' => 2,'error'=>'Sai mật khẩu');
		}
		else if ($data['is_activated'] == 0){
			return array('code' => 3,'error'=>'Tài khoản chưa được kích hoạt','data'=>$data);
		}
		else return array('code' => 0,'data'=>$data);


	}
	//Lấy danh sách sản phẩm
	function getSanpham() {
		$conn = open_db();
		$sql = "SELECT * FROM chitietsanpham";
		$stm = $conn->prepare($sql);
		if (!$stm->execute()) {
			return array('code'=>2,"msg"=>"SEVER CANNOT COMMAND");
		}
		$result = $stm->get_result();
		if ($result->num_rows>0){
			return array('code'=>0,"result"=>$result);
		}
		return array('code'=>1,"msg"=>"Không có sản phẩm");	
	}
	//Lấy danh sách 4 sản phẩm
	function get4Sanpham() {
		$conn = open_db();
		$sql = "SELECT * FROM chitietsanpham limit 4";
		$stm = $conn->prepare($sql);
		if (!$stm->execute()) {
			return array('code'=>2,"msg"=>"SEVER CANNOT COMMAND");
		}
		$result = $stm->get_result();
		if ($result->num_rows>0){
			return array('code'=>0,"result"=>$result);
		}
		return array('code'=>1,"msg"=>"Không có sản phẩm");	
	}

	//Lấy thông tin khách hàng đăng kí lái thử
	function getDangKiLaiThu() {
		$conn = open_db();
		$sql = "SELECT * FROM dangkilaithu";
		$stm = $conn->prepare($sql);
		if (!$stm->execute()) {
			return array('code'=>2,"msg"=>"SEVER CANNOT COMMAND");
		}
		$result = $stm->get_result();
		if ($result->num_rows>0){
			return array('code'=>0,"result"=>$result);
		}
		return array('code'=>1,"msg"=>"Không có sản phẩm");	
	}

	//Lấy khách hàng liên hệ tư vấn
	function getKhLienhe() {
		$conn = open_db();
		$sql = "SELECT * FROM lienhe";
		$stm = $conn->prepare($sql);
		if (!$stm->execute()) {
			return array('code'=>2,"msg"=>"SEVER CANNOT COMMAND");
		}
		$result = $stm->get_result();
		if ($result->num_rows>0){
			return array('code'=>0,"result"=>$result);
		}
		return array('code'=>1,"msg"=>"Không có sản phẩm");	

	}

	function getNewProduct() {
		$conn = open_db();
		$sql = "SELECT * FROM chitietsanpham ORDER BY id DESC limit 6";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			return array('code'=>0,'result'=>$result);
		}
		return array('code'=>1,'msg'=>'Không có sản phẩm');
	}
	function getDetail($id){
		$conn = open_db();
		$sql = "SELECT * FROM chitietsanpham WHERE id= ?";
		$stm= $conn->prepare($sql);
		$stm->bind_param('i',$id);
		if (!$stm->execute()) {
			return  array('code'=>2,"msg"=>$stm->error);
		}
		$result = $stm->get_result();
		if ($result->num_rows>0){
			return array('code'=>0,"result"=>$result);
		}
		return array('code'=>1,"msg"=>"Không có sản phẩm");	
	}



	//Lấy tên sản phẩm theo mã sản phẩm
	function getNamebyId($id) {
		$conn = open_db();
		$sql = "SELECT tensp FROM chitietsanpham WHERE id = ?";
		$stm = $conn->prepare($sql);
		$stm->bind_param('i',$id);
		if (!$stm->execute()) {
			return array('code'=>2,'msg'=>"SEVER can not command");
		}
		$result = $stm->get_result();
		if ($result->num_rows>0) {
			$row = $result->fetch_assoc();
			$name = $row['tensp'];
			return array('code'=>0,'result'=>$name);
		}
		return array('code'=>1,'msg'=>'Không có sản phẩm');
	}

	//Lấy hình ảnh theo mã san phẩm
	function getImgbyId($id) {
		$conn = open_db();
		$sql = "SELECT img FROM chitietsanpham WHERE id = ?";
		$stm = $conn->prepare($sql);
		$stm->bind_param('i',$id);
		if (!$stm->execute()) {
			return array('code'=>2,'msg'=>"SEVER can not command");
		}
		$result = $stm->get_result();
		if ($result->num_rows>0) {
			$row = $result->fetch_assoc();
			$name = $row['img'];
			return array('code'=>0,'result'=>$name);
		}
		return array('code'=>1,'msg'=>'Không có sản phẩm');
	}

	function getBestSeller(){
		$conn = open_db();
		$sql = "SELECT * FROM chitietsanpham where banchay = 1";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			return array('code'=>0,'result'=>$result);
		}
		return array('code'=>1,'msg'=>'Không có sản phẩm');

	}


	//LAY61 THONG TIN WEB
	function getInfoWeb() {
		$conn = open_db();
		$sql = "SELECT * FROM thongtin";
		$stm = $conn->prepare($sql);
		if (!$stm->execute()) {
			return array('code'=>2,'msg'=>"SEVER CANNOT COMMAND");
		}
		$result = $stm->get_result();
		if ($result->num_rows > 0) {
			return array('code'=>0,'result'=> $result);
		}
		return array('code'=>1,'msg'=>"Khong co thong tin");
	}

	function updateStatus($id) {
		$conn = open_db();
		$sql = "UPDATE dangkilaithu SET trangthai=1 WHERE id=$id";
		$stm = $conn->prepare($sql);
		if (!$stm->execute()) {
			return array('code'=>2,'msg'=>"SEVER CANNOT COMMAND");
		}
		$result = $stm->get_result();
		if ($result->num_rows > 0) {
			return array('code'=>0,'result'=> $result);
		}
		return array('code'=>1,'msg'=>"Khong co thong tin");
	}
	// function deleteProduct($id) {
	// 	$conn = open_db();
	// 	$sql = "DELETE FROM `dangkilaithu` WHERE id = '$id'"
	// 	$stm = $conn->prepare($sql);
	// 	if (!$stm->execute()) {
	// 		return array('code'=>2,'msg'=>"SEVER CANNOT COMMAND");
	// 	}
	// 	$result = $stm->get_result();
	// 	if ($result->num_rows > 0) {
	// 		return array('code'=>0,'result'=> $result);
	// 	}
	// 	return array('code'=>1,'msg'=>"Khong co thong tin");
	// }

	function dangkilaithu($hoten,$sdt,$email,$id) {
		$conn = open_db();
		$sql = "INSERT INTO dangkilaithu(hoten,email,sdt,maxe) VALUES(?,?,?,?)";
		$stm = $conn->prepare($sql);
		$stm->bind_param('sssi',$hoten,$email,$sdt,$id);
		if (!$stm->execute()) {
			return array('code'=>'2',"msg"=>"SEVER CANNOT COMMAND","error"=>$stm->error);
		}
		$malienhe = $stm->insert_id;
		return array('code'=>0,"msg"=>"ĐỂ LẠI THÔNG TIN THÀNH CÔNG, CHÚNG TÔI SẼ LIÊN HỆ BẠN SỚM NHẤT","id"=>$malienhe);
	}
?>