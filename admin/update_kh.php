<?php include_once "../class/class.php"; ?>
<?php

require_once "../admin/header.php"; ?>
<?php

require_once "../admin/show_all.php"; ?>
<?php

$user = new user_class();
if (isset($_POST['submit_ud'])) {
    if($_FILES['hinh']['name']==''){
        $hinh = $_POST['anh_cu'];
    }
    else{
        $hinh = $_FILES['hinh']['name'];
    }
    $email = $_POST['email'];
    $ten_kh = $_POST['ten_kh'];
    $mat_khau = $_POST['mat_khau'];
    $ma_kh = $_GET['update_khachhang'];
    $user->update_khachhang($hinh, $email, $ten_kh, $mat_khau, $ma_kh);
    header("Location:show_kh.php");
}
?>
<?php
if (isset($_GET['update_khachhang'])) {
    $users = $user->show_khachhangtm($_GET['update_khachhang']);
?>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Ảnh</label> <br>
        <input type="file" name="hinh" value=""><br>
        
        <input type="text" name="anh_cu" value="<?php echo $users['hinh'] ?>"><br>
        <label for="">Email</label> <br>
        <input type="text" name="email" value="<?php echo $users['email'] ?>"> <br>
        <label for="">Tên khách hàng</label> <br>
        <input type="text" name="ten_kh" value="<?php echo $users['ten_kh'] ?>"> <br>
        <label for="">Mật khẩu</label> <br>
        <input type="text" name="mat_khau" value="<?php echo $users['mat_khau'] ?>"> <br>
        <p>
            <button type="submit" name="submit_ud">Cập nhật</button>
        </p>
    </form>
<?php

}

?>
<?php

require_once "../admin/footer.php"; ?>