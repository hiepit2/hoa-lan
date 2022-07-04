<?php include_once "../class/class.php";
?>
<?php
require_once "../admin/show_all.php"; ?>
<?php
$user = new user_class();
if (isset($_POST['uploadclick'])) {
    $insert_user = $user->insert_hanghoa($_POST['hinh'], $_POST['ten_hh'], $_POST['don_gia'], $_POST['gian_gia'], $_POST['ngay_nhap'], $_POST['mo_ta'], $_POST['dac_biet'], $_POST['ma_loai']);
    echo $insert_user;
    header("refresh:1;url=show_sp.php");
}
?>
<form action="insert_sp.php" method="post">
    <label for="">Ảnh</label> <br>
    <input type="file" name="hinh"><br>
    <label for="">Tên sản phẩm</label> <br>
    <input type="text" name="ten_hh"> <br>
    <label for="">Giá sản phẩm</label> <br>
    <input type="number" name="don_gia"> <br>
    <label for="">Giảm giá</label> <br>
    <input type="number" name="gian_gia"> <br>
    <label for="">Ngày nhập</label> <br>
    <input type="date" name="ngay_nhap"> <br>
    <label for="">Mô tả sản phẩm</label> <br>
    <input type="text" name="mo_ta"> <br>
    <label for="">Đặc biệt</label> <br>
    <input type="number" name="dac_biet"> <br>
    <label for="">Mã loại</label> <br>
    <input type="number" name="ma_loai"> <br>
    <button type="submit" name="uploadclick">Thêm sản phẩm</button>
</form>
