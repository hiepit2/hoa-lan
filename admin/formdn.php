<?php
session_start();
include_once "../class/class.php"; ?>
<link rel="stylesheet" href="../admin/dangnhap.css">
<?php
$error = '';
if (isset($_POST['uploadclick'])) {
    $email = $_POST['email'];
    $pass = $_POST['mat_khau'];
    if (empty($email) || empty($pass)) {
        $error = "Phải nhập email hoặc password";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Sai định dạng email";
    }
    if (empty($error)) {
        $user_model = new user_class();
        $user = $user_model->get_user($email, $pass);
        // echo "<pre>";
        // print_r($user);
        // echo "</pre>";
        if (empty($user)) {
            $error = "Sai thông tin tài khoản";
        } else {
            $_SESSION['user'] = $user;
            $_SESSION['success'] = "";
            header("Location:index.php");
            exit();
        }
    }
}
?>
<h3 style="color: red;"><?php echo $error; ?></h3>
<!-- <form action="" method="post">
    <label for="">Email đăng nhập</label> <br>
    <input type="text" name="email"><br>
    <label for="">Mật khẩu</label> <br>
    <input type="password" name="mat_khau"> <br>
    <button type="submit" name="uploadclick">Đăng nhập</button>
</form> -->

<body>
    <div class="container">
        <form class="form-login" action="" method="post">
            <h1>Đăng nhập</h1>
            <div class="form-text">
                <label for="">Email đăng nhập</label><br>
                <input type="text" name="email">
            </div>
            <div class="form-text">
                <label for="">Mặt khẩu</label> <br>
                <input type="password" name="mat_khau">
            </div>
            <button type="submit" name="uploadclick">Đăng nhập</button><br>
            <span>Bạn chưa có tài khoản? Đăng ký <a href="">Tại đây</a></span>
        </form>
    </div>
</body>