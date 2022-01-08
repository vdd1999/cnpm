<?php

	require_once('conn.php');
	function checkExistProduct($id) {
		$conn = open_db();
		$sql = "SELECT tensp FROM sanpham WHERE id = ?";
		$stm = $conn->prepare($sql);
		$stm->bind_param('i',$id);
		if (!$stm->execute()) {
			return json_encode(array('code'=>2,'message'=>"SEVER CANNOT COMMAND"));
		}
		$result = $stm->get_result();
		if ($result->num_rows > 0) {
			return true;
		}
		return false;

	}
	function changeBanchay($id,$banchay) {
		$conn = open_db();
		if (checkExistProduct($id)) {
			$sql = "UPDATE sanpham set banchay = ? where id = ?";
			$stm = $conn->prepare($sql);
			$stm->bind_param('ii',$banchay,$id);
			if (!$stm->execute()) {
				return array('code'=>2,'message'=>"SEVER CANNOT COMMAND");
			}
			return array('code'=>0,"message"=>"THAY ĐỔI THÀNH CÔNG");			
		}
		return array('code'=>1,'message'=>"KHÔNG TÌM THẤY SẢN PHẨM");
	}

	function getThongtinPage() {
		$conn = open_db();
		$result = $conn->query("SELECT * FROM thongtin");
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return array('code'=>0,'result'=>$row);
		}
		return array('code'=>1,'msg'=>"Không có thông tin");
	}

	function getProductbyId($id) {
		$conn = open_db();
		//TÌM SẢN PHẨM THEO ID
		$sql = "SELECT * FROM chitietsanpham WHERE id = ?";
		$stm = $conn->prepare($sql);
		$stm ->bind_param('i',$id);
		if (!$stm->execute()) {
			return array('code'=>2,'msg'=>'SEVER CANNOT COMMAND');
		}
		$result = $stm->get_result();
		if ($result->num_rows <= 0) {
			return array('code'=>1,'msg'=>'KHÔNG TÌM THẤY SẢN PHẨM');
		}
		$row = $result->fetch_assoc();
		return array('code'=>0,'result'=>$row);
	}

	function getHangModal() {
		$conn = open_db();
		$sql = "SELECT * FROM hang";
		$stm = $conn->prepare($sql);
		if (!$stm->execute()) {
			return array('code'=>2,"msg"=>"SEVER CANNOT COMMAND");	
		}
		$hang = array();
		$result = $stm->get_result();
		if ($result->num_rows>0){
			while ($row = $result->fetch_assoc()) {
			    array_push($hang,$row);
			}
			return array('code'=>0,"result"=>$hang);
		}
		return array('code'=>1,"msg"=>"Không có hãng");	
	}


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

	function lienhe($hoten,$sdt,$email,$id) {
		$conn = open_db();
		$sql = "INSERT INTO lienhe(hoten,email,sdt,maxe) VALUES(?,?,?,?)";
		$stm = $conn->prepare($sql);
		$stm->bind_param('sssi',$hoten,$email,$sdt,$id);
		if (!$stm->execute()) {
			return array('code'=>'2',"msg"=>"SEVER CANNOT COMMAND","error"=>$stm->error);
		}
		$malienhe = $stm->insert_id;
		return array('code'=>0,"msg"=>"ĐỂ LẠI THÔNG TIN THÀNH CÔNG, CHÚNG TÔI SẼ LIÊN HỆ BẠN SỚM NHẤT","id"=>$malienhe);
	}

	function lienhetuvan($hoten,$sdt,$email) {
		$conn = open_db();
		$sql = "INSERT INTO lienhetuvan(hoten,email,sdt) VALUES(?,?,?)";
		$stm = $conn->prepare($sql);
		$stm->bind_param('sss',$hoten,$email,$sdt);
		if (!$stm->execute()) {
			return array('code'=>'2',"msg"=>"SEVER CANNOT COMMAND","error"=>$stm->error);
		}
		$malienhe = $stm->insert_id;
		return array('code'=>0,"msg"=>"ĐỂ LẠI THÔNG TIN THÀNH CÔNG, CHÚNG TÔI SẼ LIÊN HỆ BẠN SỚM NHẤT","id"=>$malienhe);
	}

	function getMauxe() {
		$conn = open_db();
		$sql = "Select id,tensp from chitietsanpham";
		$stm = $conn->prepare($sql);
		if (!$stm->execute()) {
			return array('code'=>2,"msg"=>"SEVER CANNOT COMMAND");	
		}
		$mauxe = array();
		$result = $stm->get_result();
		if ($result->num_rows>0){
			while ($row = $result->fetch_assoc()) {
			    array_push($mauxe,$row);
			}
			return array('code'=>0,"result"=>$mauxe);
		}
		return array('code'=>1,"msg"=>"Không có mã xe được chọn");		}

	//XỬ LÝ REQUEST 
	if ($_SERVER['REQUEST_METHOD'] != 'POST' &&
        $_SERVER['REQUEST_METHOD'] != 'GET') {
        die(json_encode(array('code' => 4, 'message' => 'API này chỉ hỗ trợ POST hoặc GET')));
    }

    if (isset($_POST['action'])) {

    	$action = $_POST['action'];
	    if (isset($_POST['banchay'])) {
	    	$banchay = $_POST['banchay'];
	    }

	    if (isset($_POST['id'])) {
	    	$id = $_POST['id'];
	    }

	    if (isset($_POST['mahang'])){
	    	$mahang = $_POST['mahang'];
	    }

	    if (isset($_POST['maloaixe'])){
	    	$maloaixe = $_POST['maloaixe'];
	    }

	   	if (isset($_POST['hoten'])) {
	    	$hoten = $_POST['hoten'];
	    }

	    if (isset($_POST['email'])) {
	    	$email = $_POST['email'];
	    }

	    if (isset($_POST['sdt'])){
	    	$sdt = $_POST['sdt'];
	    }

	    if ($action == "changeBanchay") {
	    	die(json_encode(changeBanchay($id,$banchay)));
	    }

		if($action == "getMauxe") {
			die(json_encode(getMauxe()));
		}

	    if ($action == "getThongtinPage") {
	    	die (json_encode(getThongtinPage()));
	    }

		if($action == "editProduct") {
			die(json_encode(getProductbyId($id)));
		}

		if ($action == "dangkilaithu") {
			die(json_encode(dangkilaithu($hoten,$sdt,$email,$id)));
		}

		if ($action == "lienhe") {
			die(json_encode(lienhe($hoten,$sdt,$email,$id)));
		}

		if ($action == "lienhetuvan") {
			die(json_encode(lienhetuvan($hoten,$sdt,$email)));
		}
    }
    else {
    	die(json_encode(array('code' => 4, 'message' => 'API này yêu cầu một action cụ thể')));
    }
?>