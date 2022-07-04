<?php
include_once "../database/database.php";

class user_class
{
    public $controll;
    public function __construct()
    {
        $this->controll = new database();
    }

    //khach hang
    public function insert_khachhang($hinh, $ten_kh, $email, $mat_khau)
    {
        $insert_khachhang = "INSERT INTO khachhang(hinh,ten_kh,email,mat_khau) 
        VALUE('$hinh','$ten_kh','$email','$mat_khau')";
        $this->controll->exec($insert_khachhang);
    }
    public function show_khachhang()
    {
        $show_khachhang = "SELECT * FROM khachhang";
        $result = $this->controll->select_all($show_khachhang);
        return $result;
    }
    public function select_khachhang($ma_kh)
    {
        $select_khachhang = "SELECT * FROM khachhang WHERE ma_kh = '$ma_kh'";
        $result =  $this->controll->select_one($select_khachhang);
        return $result;
    }
    public function update_khachhang($hinh, $email, $ten_kh, $mat_khau, $ma_kh)
    {
        $update_khachhang = "UPDATE khachhang SET mat_khau='$mat_khau',hinh='$hinh',email='$email',ten_kh='$ten_kh' WHERE ma_kh= '$ma_kh'";
        $this->controll->exec($update_khachhang);
    }
    public function delete_khachhang($ma_kh)
    {
        $delete_khachhang = "DELETE FROM khachhang WHERE ma_kh='$ma_kh'";
        $this->controll->exec($delete_khachhang);
    }
    public function show_khachhangtm($ma_kh)
    {
        $show_khachhangtm = "SELECT * FROM khachhang WHERE ma_kh='$ma_kh'";
        $result = $this->controll->select_one($show_khachhangtm);
        return $result;
    }
    public function show_thongtin($ma_kh)
    {
        $show_khachhangtm = "SELECT * FROM khachhang WHERE ma_kh='$ma_kh'";
        $result = $this->controll->select_one($show_khachhangtm);
        return $result;
    }
    // san pham
    public function insert_hanghoa($hinh, $ten_hh, $don_gia, $gian_gia, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai)
    {
        $insert_hanghoa = "INSERT INTO hang_hoa(hinh,ten_hh,don_gia,gian_gia,ngay_nhap,mo_ta,dac_biet,ma_loai) VALUE('$hinh','$ten_hh','$don_gia','$gian_gia','$ngay_nhap','$mo_ta','$dac_biet','$ma_loai')";
        $this->controll->exec($insert_hanghoa);
    }
    public function show_hanghoa()
    {
        $show_hanghoa = "SELECT * FROM hang_hoa ";
        $result = $this->controll->select_all($show_hanghoa);
        return $result;
    }
    public function show_hanghoaslx()
    {
        $show_hanghoa = "SELECT * FROM hang_hoa ORDER BY so_luot_xem DESC LIMIT 4";
        $result = $this->controll->select_all($show_hanghoa);
        return $result;
    }
    public function show_hanghoatm($ma_hh)
    {
        $show_hanghoatm = "SELECT * FROM hang_hoa WHERE ma_hh='$ma_hh'";
        $result = $this->controll->select_one($show_hanghoatm);
        return $result;
    }
    public function select_hanghoa($ma_hh)
    {
        $select_hanghoa = "SELECT * FROM hang_hoa WHERE ma_hh = '$ma_hh'";
        $result =  $this->controll->select_one($select_hanghoa);
        return $result;
    }
    public function update_hanghoa($ten_hh, $don_gia, $gian_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai, $ma_hh)
    {
        $update_hanghoa = "UPDATE hang_hoa SET ten_hh='$ten_hh',don_gia='$don_gia',gian_gia='$gian_gia',hinh='$hinh',ngay_nhap='$ngay_nhap',mo_ta='$mo_ta',dac_biet='$dac_biet',ma_loai='$ma_loai' WHERE ma_hh= '$ma_hh'";
        $this->controll->exec($update_hanghoa);
    }
    public function delete_hanghoa($ma_hh)
    {
        $del_hanghoa = "DELETE FROM hang_hoa WHERE ma_hh='$ma_hh'";
        $this->controll->exec($del_hanghoa);
    }

    //bình luận
    public function insert_binhluan($noi_dung, $ma_hh, $ma_kh, $ngay_bl)
    {
        $insert_binhluan = "INSERT INTO binh_luan(noi_dung,ma_hh,ma_kh,ngay_bl) VALUE('$noi_dung','$ma_hh','$ma_kh','$ngay_bl')";
        $this->controll->exec($insert_binhluan);
    }
    public function show_binhluan($ma_hh)
    {
        $show_binhluan = "SELECT * FROM binh_luan WHERE ma_hh = '$ma_hh' ORDER BY ngay_bl DESC";
        $result = $this->controll->select_all($show_binhluan);
        return $result;
    }
    public function show_binhluantat()
    {
        $show_binhluan = "SELECT * FROM binh_luan ";
        $result = $this->controll->select_all($show_binhluan);
        return $result;
    }
    public function delete_binhluan($ma_hh)
    {
        $delete_binhluan = "DELETE FROM binh_luan WHERE ma_hh='$ma_hh'";
        $this->controll->exec($delete_binhluan);
    }

    //loại hàng
    public function update_loai($ten_loai, $ma_loai)
    {
        $update_loai = "UPDATE loai SET ten_loai='$ten_loai' WHERE ma_loai= '$ma_loai'";
        $this->controll->exec($update_loai);
    }
    public function insert_loai($ten_loai)
    {
        $insert_loai = "INSERT INTO loai(ten_loai) VALUE('$ten_loai')";
        $this->controll->exec($insert_loai);
    }
    public function show_loai()
    {
        $show_loai = "SELECT * FROM loai";
        $result = $this->controll->select_all($show_loai);
        return $result;
    }
    public function delete_loai($ma_loai)
    {
        $delete_loai = "DELETE FROM loai WHERE ma_loai='$ma_loai'";
        $this->controll->exec($delete_loai);
    }
    public function show_loaitm($ma_loai)
    {
        $show_loaitm = "SELECT * FROM loai WHERE ma_loai='$ma_loai'";
        $result = $this->controll->select_one($show_loaitm);
        return $result;
    }

    public function get_user($email, $mat_khau)
    {
        $sql = "SELECT * FROM khachhang WHERE email = '$email' AND mat_khau = '$mat_khau'";
        $result = $this->controll->select_one($sql);
        return $result;
    }
    //google map

    public function update_luotxem($ma_hh)
    {
        $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh='$ma_hh'";
        $result = $this->controll->exec($sql);
    }
}
