

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
    public function getCustomer()
    {
        $query = "SELECT * FROM khachhang";
        $result = $this->db->select($query);
        return $result;
    }

    public function getContract()
    {
        $query = "SELECT * FROM danhsachhopdong";
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
                $query = "INSERT INTO tbl_user`(user`, password, fullname, id_card)
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

        public function setCustomer($sdt, $fullname, $id_card,$address)
    {
        $sdt = mysqli_real_escape_string($this->db->link, $this->fm->validation($sdt));
        $fullname = mysqli_real_escape_string($this->db->link, $this->fm->validation($fullname));
        $id_card = mysqli_real_escape_string($this->db->link, $this->fm->validation($id_card));
        $address = mysqli_real_escape_string($this->db->link, $this->fm->validation($address));

        if (empty($sdt) || empty($fullname) || empty($id_card)|| empty($address)) {
            $alert = '<script> toastr.warning("Vui lòng nhập đầy đủ thông tin!");</script>';
            return $alert;
        } else {
            $query = "SELECT * FROM khachhang WHERE sdt = '$sdt' LIMIT 1";
            $result = $this->db->select($query);

            if ($result && $result->num_rows > 0) {
                $alert = '<script> toastr.warning(" ' . $sdt . ' đã tồn tại!");</script>';
                return $alert;
            } else {
               
                $query = "INSERT INTO khachhang`(sdt`, tenKhachHang, diaChi, cmnd)
                VALUES ('$sdt', '$fullname', '$address', '$id_card')";
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
    
    public function setContract( $sdt, $ngaytao,$noidung,$tongtien,$thanhtoan1,$thanhtoan2,$thanhtoan3, $manv)
    {      
        
       $mahopdong= (string)rand(1000000,9999999);
        $sdt = mysqli_real_escape_string($this->db->link, $this->fm->validation($sdt));
        $ngaytao = mysqli_real_escape_string($this->db->link, $this->fm->validation($ngaytao));
        $noidung = mysqli_real_escape_string($this->db->link, $this->fm->validation($noidung));
        $tongtien = mysqli_real_escape_string($this->db->link, $this->fm->validation($tongtien));
        $thanhtoan1 = mysqli_real_escape_string($this->db->link, $this->fm->validation($thanhtoan1));
        $thanhtoan2 = mysqli_real_escape_string($this->db->link, $this->fm->validation($thanhtoan2));
        $thanhtoan3 = mysqli_real_escape_string($this->db->link, $this->fm->validation($thanhtoan3));


        if (empty($sdt) || empty($noidung)|| empty($tongtien)|| empty($thanhtoan1)) {
            $alert = '<script> toastr.warning("Vui lòng nhập đầy đủ thông tin!");</script>';
            return $alert;
        } else {
            $query = "SELECT * FROM hopdong  Where maHopDong   = '$mahopdong' LIMIT 1";
            $result = $this->db->select($query);

            if ($result && $result->num_rows > 0) {
                $alert = '<script> toastr.warning(" ' . $mahopdong . ' đã tồn tại!");</script>';
                return $alert;
            } else {
               
                $query ="INSERT INTO hopdong`(maHopDong`, maKH, ngayTao, noiDung, tongTien, thanhToan1, thanhToan2, thanhToan3,`maNV`)
                VALUES ('$mahopdong', '$sdt', '$ngaytao', '$noidung','$tongtien',$thanhtoan1,$thanhtoan2,$thanhtoan3,$manv)";
            
                // $query ="INSERT INTO hopdong`(maHopDong`, maKH, ngayTao, noiDung, tongTien, thanhToan1, thanhToan2, thanhToan3) 
                // VALUES ('$mahopdong','23235','12423','6334','32423423','45645','42352','34534');";
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
    public function deleteCustomer($sdt)
    {
        $query = "SELECT * FROM khachhang WHERE sdt = '$sdt'";
        $result = $this->db->select($query);

        if ($result && $result->num_rows > 0) {
            $query = "DELETE FROM khachhang WHERE sdt = '$sdt'";
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
    public function deletePersonnel($id)
    {
        $query = "SELECT * FROM tbl_user WHERE id = '$id'";
        $result = $this->db->select($query);

        if ($result && $result->num_rows > 0) {
            $query = "DELETE FROM tbl_user WHERE id = '$id'";
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

        $query = "UPDATE tbl_user SET fullname`='$fullname', email`='$email' WHERE id = '$id'";
        $result = $this->db->update($query);
        
        if ($result == false) {
            $alert = '<script> toastr.warning("Cập nhật không thành công!");</script>';
            return $alert;
        } else {
            $alert = '<script> toastr.success("Cập nhật thành công!");</script>';
            return $alert;
        }
    }
    public function updateCustomer($diachi, $fullname,$sdt)
    {
        $sdt = mysqli_real_escape_string($this->db->link, $this->fm->validation($sdt));
        $fullname = mysqli_real_escape_string($this->db->link, $this->fm->validation($fullname));
        $diachi= mysqli_real_escape_string($this->db->link, $this->fm->validation($diachi));

        $query = "UPDATE khachhang SET tenKhachHang`='$fullname', diaChi`='$diachi' WHERE sdt = '$sdt'";
        echo ($query);
        $result = $this->db->update($query);
        
        if ($result == false) {
            $alert = '<script> toastr.warning("Cập nhật không thành công!");</script>';
            return $alert;
        } else {
            $alert = '<script> toastr.success("Cập nhật thành công!");</script>';
            return $alert;
        }
    }
    public function updateContract($thanhToan2, $thanhToan3,$id)
    {
        $id = mysqli_real_escape_string($this->db->link, $this->fm->validation($id));
        $thanhToan2 = mysqli_real_escape_string($this->db->link, $this->fm->validation($thanhToan2));
        $thanhToan3 = mysqli_real_escape_string($this->db->link, $this->fm->validation($thanhToan3));


        $query = "UPDATE hopdong SET thanhToan2`='$thanhToan2',  thanhToan3`='$thanhToan3' WHERE mahopDong = '$id' ";
        echo ($query);
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
    public function getCustomerlId($id)
    {
        $query = "SELECT * FROM khachhang WHERE sdt = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function getContractlId($id)
    {
        $query = "SELECT * FROM danhsachhopdong WHERE maHopDong = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
    
    
}