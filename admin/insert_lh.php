<?php include_once "../class/class.php";
?>
<?php

require_once "../admin/show_all.php"; ?>
<?php
$user = new user_class();
if (isset($_POST['uploadclick'])) {
    $insert_user = $user->insert_loai($_POST['ten_loai']);
    echo $insert_user;
    header("location:show_lh.php");
}
?>
<form action="insert_lh.php" method="post">
    <label for="">Tên loại</label> <br>
    <input type="text" name="ten_loai"> <br>
    <button type="submit" name="uploadclick">Thêm </button>
</form>
