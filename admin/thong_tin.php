<?php
session_start();
// echo "<pre>";
// print_r($_SESSION['user']);
// echo "</pre>";
if (isset($_SESSION['user'])) :

?>
    <label for=""></label>
    <img src="img/<?php echo "{$_SESSION['user']['hinh']}" ?>" alt="" style="width: 100px;"> <br>
    <label for="">Tên khách hàng</label> 
    <input type="text" value="<?php echo "{$_SESSION['user']['ten_kh']}" ?>"> <br>
    <label for="">Email</label> 
    <input type="text" value="<?php echo "{$_SESSION['user']['email']}" ?>"> <br>
    <label for="">Mật khẩu</label>
    <input type="text" value="<?php echo "{$_SESSION['user']['mat_khau']}" ?>"> <br>
    <a href="../admin/index.php">Quay trở về</a>
    <a href="../admin/update_tt.php?id=<?php echo "{$_SESSION['user']['ma_kh']}" ?>">Cập nhật thông tin</a>
<?php
endif;
?>