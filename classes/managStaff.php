<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helpers/format.php');
?>

<?php
/**
 * managStaff
 */
class managStaff
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    /**
     * Staff
     */
    public function getStaff()
    {
        $query = "SELECT * FROM tbl_user";
        $result = $this->db->select($query);
        return $result;
    }

    public function setStaff($user, $fullname, $id_card)
    {
        $user = mysqli_real_escape_string($this->db->link, $this->fm->validation($user));
        $fullname = mysqli_real_escape_string($this->db->link, $this->fm->validation($fullname));
        $id_card = mysqli_real_escape_string($this->db->link, $this->fm->validation($id_card));

        if (empty($user) || empty($fullname) || empty($id_card)) {
            $alert = '<script> toastr.warning("Vui lòng nhập đầy đủ thông tin!");</script>';
            return $alert;
        } else {
            $query = "SELECT * FROM tbl_user WHERE user = '$user' or id_card = '$id_card' LIMIT 1";
            $result = $this->db->select($query);

            if ($result && $result->num_rows > 0) {
                $alert = '<script> toastr.warning(" ' . $user . ' hoặc ' . $id_card . ' đã tồn tại!");</script>';
                return $alert;
            } else {
                $password = md5($user);
                $query = "INSERT INTO `tbl_user`(`user`, `password`, `fullname`, `id_card`)
                VALUES ('$user', '$password', '$fullname', '$id_card')";
                $result = $this->db->insert($query);

                if ($result != false) {
                    $alert = '<script> toastr.success("Đã thêm thành công!");</script>';
                    return $alert;
                } else {
                    $alert = '<script> toastr.warning("Đã thêm thất bại!");</script>';
                    return $alert;
                }
            }
        }
    }

    /**
     * in List tbl_user
     */
    public function deletePersonnel($id)
    {
        $query = "SELECT * FROM tbl_user WHERE id = '$id'";
        $result = $this->db->select($query);

        if ($result && $result->num_rows > 0) {
            $query = "DELETE FROM `tbl_user` WHERE id = '$id'";
            $result = $this->db->delete($query);

            if ($result != false) {
                $alert = '<script> toastr.success("Đã xóa thành công!");</script>';
                return $alert;
            } else {
                $alert = '<script> toastr.warning("Đã xóa thất bại!");</script>';
                return $alert;
            }
        }
    }

    public function updatePersonnel($id, $email, $fullname)
    {
        $id = mysqli_real_escape_string($this->db->link, $this->fm->validation($id));
        $fullname = mysqli_real_escape_string($this->db->link, $this->fm->validation($fullname));
        $email = mysqli_real_escape_string($this->db->link, $this->fm->validation($email));

        $query = "UPDATE `tbl_user` SET `fullname`='$fullname', `email`='$email' WHERE `id` = '$id'";
        $result = $this->db->update($query);
        
        if ($result == false) {
            $alert = '<script> toastr.warning("Cập nhật không thành công!");</script>';
            return $alert;
        } else {
            $alert = '<script> toastr.success("Cập nhật thành công!");</script>';
            return $alert;
        }
    }

    public function getPersonnelId($id)
    {
        $query = "SELECT * FROM tbl_user WHERE id = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
}
