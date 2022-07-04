<?php include_once "../class/class.php"; ?>
<?php



require_once "../admin/show_all.php"; ?>
<?php

$user = new user_class();
if (isset($_POST['submit_ud'])) {
    $ten_loai = $_POST['ten_loai']; 
    $ma_loai = $_GET['update_loai'];
    $user->update_loai($ten_loai, $ma_loai);
    header("location:show_lh.php");
}

?>
<?php
if (isset($_GET['update_loai'])) {
    $users = $user->show_loaitm($_GET['update_loai']);
?>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Loại hàng</label> <br>
        <input type="text" name="ten_loai" value="<?php echo $users['ten_loai'] ?>"> <br>
        <p>
            <button type="submit" name="submit_ud">Cập nhật</button>
        </p>
    </form>
<?php

}

?>
