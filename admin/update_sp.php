<?php include_once "../class/class.php"; ?>
<?php

require_once "../admin/show_all.php"; ?>
<?php

$user = new user_class();
if (isset($_POST['submit_ud'])) {
    $ten_hh = $_POST['ten_hh'];
    $don_gia = $_POST["don_gia"];
    $gian_gia = $_POST['gian_gia'];
    $ngay_nhap = $_POST['ngay_nhap'];
    $mo_ta = $_POST["mo_ta"];
    $dac_biet = $_POST['dac_biet'];
    $ma_loai = $_POST['ma_loai'];
    if($_FILES['hinh']['name']==''){
        $hinh = $_POST['anh_cu'];
    }
    else{
        $hinh = $_FILES['hinh']['name'];
    }
    
    $ma_hh = $_GET['update_hanghoa'];
    $user->update_hanghoa($ten_hh, $don_gia, $gian_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai, $ma_hh);
    header("location:show_sp.php");
}

?>
<?php
if (isset($_GET['update_hanghoa'])) {
    $users = $user->show_hanghoatm($_GET['update_hanghoa']);
?>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Ảnh</label> <br>
        <input type="file" name="hinh" value=""><br>
        
        <input type="text" name="anh_cu" value="<?php echo $users['hinh'] ?>"><br>


        <label for="">Tên sản phẩm</label> <br>
        <input type="text" name="ten_hh" value="<?php echo $users['ten_hh'] ?>"> <br>
        <label for="">Giá sản phẩm</label> <br>
        <input type="number" name="don_gia" value="<?php echo $users['don_gia'] ?>"> <br>
        <label for="">Giảm giá</label> <br>
        <input type="number" name="gian_gia" value="<?php echo $users['gian_gia'] ?>"> <br>
        <label for="">Ngày nhập</label> <br>
        <input type="date" name="ngay_nhap" value="<?php echo $users['ngay_nhap'] ?>"> <br>
        <label for="">Mô tả sản phẩm</label> <br>
        <input type="text" name="mo_ta" value="<?php echo $users['mo_ta'] ?>"> <br>
        <label for="">Đặc biệt</label> <br>
        <input type="number" name="dac_biet" value="<?php echo $users['dac_biet'] ?>"> <br>
        <label for="">Mã loại</label> <br>
        <input type="number" name="ma_loai" value="<?php echo $users['ma_loai'] ?>"> <br>
        <p>
            <button type="submit" name="submit_ud">Cập nhật</button>
        </p>
    </form>
<?php

}

?>
