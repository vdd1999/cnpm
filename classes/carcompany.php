<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helpers/format.php');
?>

<?php
/**
 * carcompany
 */
class carcompany
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function getCarCompany()
    {
        $query = "SELECT * FROM tbl_carcompany";
        $result = $this->db->select($query);
        return $result;
    }

    public function setCarCompany($name, $descriptions)
    {
        $name = mysqli_real_escape_string($this->db->link, $this->fm->validation($name));
        $descriptions = mysqli_real_escape_string($this->db->link, $this->fm->validation($descriptions));

        if (empty($name) || empty($descriptions)) {
            $alert = '<script> toastr.warning("Vui lòng nhập đầy đủ thông tin!");</script>';
            return $alert;
        } else {
            $query = "SELECT * FROM tbl_carcompany WHERE name = '$name' LIMIT 1";
            $result = $this->db->select($query);

            if ($result && $result->num_rows > 0) {
                $alert = '<script> toastr.warning(" ' . $name . ' đã tồn tại!");</script>';
                return $alert;
            } else {
                $query = "INSERT INTO `tbl_carcompany`(`name`, `descriptions`)
                VALUES ('$name', '$descriptions')";
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

    public function deleteCarCompany($id)
    {
        $query = "SELECT * FROM tbl_carcompany WHERE id = '$id'";
        $result = $this->db->select($query);

        if ($result && $result->num_rows > 0) {
            $query = "DELETE FROM `tbl_carcompany` WHERE id = '$id'";
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

    public function updateCarCompany($id, $name, $descriptions)
    {
        $id = mysqli_real_escape_string($this->db->link, $this->fm->validation($id));
        $descriptions = mysqli_real_escape_string($this->db->link, $this->fm->validation($descriptions));
        $name = mysqli_real_escape_string($this->db->link, $this->fm->validation($name));

        $query = "UPDATE `tbl_carcompany` SET `name`='$name', `descriptions`='$descriptions' WHERE `id` = '$id'";
        $result = $this->db->update($query);

        if ($result == false) {
            $alert = '<script> toastr.warning("Cập nhật không thành công!");</script>';
            return $alert;
        } else {
            $alert = '<script> toastr.success("Cập nhật thành công!");</script>';
            return $alert;
        }
    }

    public function getCarCompanyId($id)
    {
        $query = "SELECT * FROM tbl_carcompany WHERE id = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
}
